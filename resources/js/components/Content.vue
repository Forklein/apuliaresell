<template>
  <main>
    <div class="container p-3">
      <carousel :per-page="2" :mouse-drag="false">
        <slide v-for="image in images" :key="image.id"> </slide>
      </carousel>
    </div>
  </main>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";

export default {
  name: "Content",
  components: {
    Carousel,
    Slide,
  },
  data() {
    return {
      images: [],
      baseUri: "http://127.0.0.1:8000/",
    };
  },
  async created() {
    const images = await axios.get(`${this.baseUri}api/images`);
    this.images = images.data.images;
  },
};
</script>

<style lang="scss" scoped>
</style>