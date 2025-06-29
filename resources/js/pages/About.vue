<template>
  <div class="app-about-page">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <div class="px-4 py-6 sm:px-0">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Onze Werkzaamheden</h1>
        <div class="bg-white shadow rounded-lg p-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <h3 class="text-xl font-semibold text-gray-900 mb-3">Binnen Stukwerk</h3>
              <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Wanden en plafonds stucen</li>
                <li>Herstelwerk</li>
                <li>Decoratieve afwerkingen</li>
              </ul>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-900 mb-3">Buiten Stukwerk</h3>
              <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Gevels stucen</li>
                <li>Renovatie werkzaamheden</li>
                <li>Isolatie en afwerking</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'About'
}
</script>

<style scoped>
.page {
  min-height: calc(100vh - 80px);
}
</style>
