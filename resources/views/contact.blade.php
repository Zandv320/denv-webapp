<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nieuwe Contactaanvraag</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #8b1725;">Nieuwe Contactaanvraag</h2>

        <div style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin: 20px 0;">
            <h3>Contactgegevens:</h3>
            <p><strong>Naam:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            @if($phone)
                <p><strong>Telefoon:</strong> {{ $phone }}</p>
            @endif
            @if($projectType)
                <p><strong>Type Project:</strong> {{ $projectType }}</p>
            @endif
        </div>

        <div style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin: 20px 0;">
            <h3>Bericht:</h3>
            <p>{{ $message }}</p>
        </div>

        <p style="font-size: 0.9em; color: #666;">
            Dit bericht is verzonden via het contactformulier op de website.
        </p>
    </div>
</body>
</html>
