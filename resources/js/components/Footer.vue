<template>
  <footer class="text-white text-center">
    <span>{{ getDate() }}</span
    >© copyright apuliaresell all rights reserved
  </footer>
</template>

<script>
export default {
  name: "Footer",
  methods: {
    getDate() {
      const date = new Date();
      return date.getFullYear();
    },
  },
};
</script>

<style lang="scss" scoped>
</style>