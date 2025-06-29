<template>
  <div id="app" class="min-h-screen bg-gray-50 app-container">
    <Header />
    <router-view />
  </div>
</template>

<script>
import Header from './Header.vue'

export default {
  name: 'App',
  components: {
    Header
  }
}
</script>

<style lang="scss">
</style>
