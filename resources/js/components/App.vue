<template>
  <div id="app" class="min-h-screen bg-gray-50 app-container">
    <Header />
    <main class="flex-1">
      <router-view />
    </main>
    <Footer />
  </div>
</template>

<script>
import Header from './Header.vue'
import Footer from './Footer.vue'

export default {
  name: 'App',
  components: {
    Header,
    Footer
  }
}
</script>

<style lang="scss">
.app-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  position: relative;
  background: transparent;
}

.app-container::before {
  content: '';
  position: fixed; /* Changed to fixed so it covers entire viewport */
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-image: url('/images/background.png');
  background-size: cover; /* Changed from contain to cover */
  background-position: center;
  background-repeat: no-repeat;
  image-rendering: -webkit-optimize-contrast;
  image-rendering: crisp-edges;
  opacity: 0.5;
  z-index: -2;
  pointer-events: none;
}

main {
  flex: 1;
  position: relative;
  z-index: 1;
  background: transparent;
}
</style>

