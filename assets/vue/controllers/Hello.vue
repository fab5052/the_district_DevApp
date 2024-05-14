<template>
    <div id="app"></div>
</template>

<script setup>
console.log(window);
new Vue({
  el: '#app',
  data: {
    slides: 7
  },
  components: {
    'carousel-3d': window['carousel-3d'].Carousel3d,
    'slide': window['carousel-3d'].Slide
  }
});
</script>
