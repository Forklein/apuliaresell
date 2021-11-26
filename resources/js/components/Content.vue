<template>
  <main>Test</main>
</template>

<script>
export default {
  name: "Content",
  data() {
    return {
      images: [],
      baseUri: "http://127.0.0.1:8000/api",
    };
  },
  async created() {
    const images = await axios.get(`${this.baseUri}/images`);
    this.images = images.data.images;
  },
};
</script>

<style lang="scss" scoped>
</style>