<template>
  <div class="app-projects-page">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <div class="px-4 py-6 sm:px-0">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Onze Projecten</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-900 mb-3">Woonhuis Renovatie</h3>
              <p class="text-gray-600 mb-4">Complete renovatie van een woonhuis inclusief binnen- en buitenstukwerk.</p>
              <span class="text-sm text-gray-500">Voltooid: 2024</span>
            </div>
          </div>
          <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-900 mb-3">Kantoorgebouw</h3>
              <p class="text-gray-600 mb-4">Stukwerk en afwerking van een modern kantoorgebouw.</p>
              <span class="text-sm text-gray-500">Voltooid: 2024</span>
            </div>
          </div>
          <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-900 mb-3">Nieuwbouw Project</h3>
              <p class="text-gray-600 mb-4">Stukwerk voor een nieuwbouw woning met speciale afwerkingen.</p>
              <span class="text-sm text-gray-500">Voltooid: 2023</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Projects'
}
</script>

<style scoped>
.page {
  min-height: calc(100vh - 80px);
}
</style>
