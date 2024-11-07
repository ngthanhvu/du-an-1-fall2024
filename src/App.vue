<script setup>
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'


</script>

<template>
  <header>
    <div class="wrapper">
      <Navbar/>
    </div>
  </header>

  <main>
    <RouterView/> <!-- Đây là nơi sẽ render các component từ router -->
  </main>

  <Footer/>
</template>

<style scoped>

</style>
