<template>
  <div class="app-contact-page">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <div class="px-4 py-6 sm:px-0">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Contact</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Contactgegevens</h2>
            <div class="space-y-3">
              <div>
                <strong class="text-gray-700">Bedrijf:</strong>
                <p class="text-gray-600">Stukadoorsbedrijf D&V</p>
              </div>
              <div>
                <strong class="text-gray-700">Telefoon:</strong>
                <p class="text-gray-600">+31 (0)6 12345678</p>
              </div>
              <div>
                <strong class="text-gray-700">Email:</strong>
                <p class="text-gray-600">info@stukadoorsbedrijf-dv.nl</p>
              </div>
              <div>
                <strong class="text-gray-700">Adres:</strong>
                <p class="text-gray-600">
                  Voorbeeldstraat 123<br>
                  1234 AB Voorbeeldstad
                </p>
              </div>
            </div>
          </div>
          <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Offerte Aanvragen</h2>
            <form class="space-y-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Naam</label>
                <input type="text" class="w-full border border-gray-300 rounded-md px-3 py-2">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" class="w-full border border-gray-300 rounded-md px-3 py-2">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Bericht</label>
                <textarea rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2"></textarea>
              </div>
              <button type="submit" class="bg-red-800 text-white px-6 py-2 rounded-md hover:bg-red-900 transition-colors">
                Verstuur
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Contact'
}
</script>

<style scoped>
.page {
  min-height: calc(100vh - 80px);
}
</style>
