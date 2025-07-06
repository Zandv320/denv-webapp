<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'projectType' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
            'privacy' => 'required|accepted'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $contactData = $validator->validated();

        try {
            // Send plain text email
            $emailBody = "Nieuwe contactaanvraag:\n\n";
            $emailBody .= "Naam: " . $contactData['name'] . "\n";
            $emailBody .= "Email: " . $contactData['email'] . "\n";
            $emailBody .= "Telefoon: " . ($contactData['phone'] ?? 'Niet opgegeven') . "\n";
            $emailBody .= "Project Type: " . ($contactData['projectType'] ?? 'Niet opgegeven') . "\n";
            $emailBody .= "Bericht:\n" . $contactData['message'] . "\n";

            Mail::raw($emailBody, function ($message) use ($contactData) {
                $message->to('info@stucadoorsbedrijfdv.nl')
                        ->subject('Nieuwe contactaanvraag van ' . $contactData['name'])
                        ->replyTo($contactData['email'], $contactData['name']);
            });

            return response()->json([
                'success' => true,
                'message' => 'Bedankt voor uw aanvraag! Wij nemen binnen 24 uur contact met u op.'
            ]);

        } catch (\Exception $e) {
            // Log the actual error
            Log::error('Contact form error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Er is een fout opgetreden. Probeer het opnieuw of neem telefonisch contact op.',
                'error' => $e->getMessage() // Add this for debugging
            ], 500);
        }
    }
}
