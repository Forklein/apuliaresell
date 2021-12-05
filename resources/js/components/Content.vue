<template>
  <main>
    <section id="shoes">
      <div class="container p-3">
        <carousel :per-page="1" :mouse-drag="false">
          <slide v-for="image in images" :key="image.id">
            <ShoesCard class="col-6 mx-auto" :data="image" />
          </slide>
        </carousel>
      </div>
    </section>
    <section id="form">
      <Form />
    </section>
  </main>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";

import ShoesCard from "./shoes/ShoesCard";
import Form from "./utilities/Form";

export default {
  name: "Content",
  components: {
    Carousel,
    Slide,
    ShoesCard,
    Form,
  },
  data() {
    return {
      images: [],
      baseUri: "http://127.0.0.1:8000/",
    };
  },
  async created() {
    try {
      const images = await axios.get(`${this.baseUri}api/images`);
      this.images = images.data.images;
    } catch (error) {
      console.log(error);
    }
  },
};
</script>

<style lang="scss" scoped>
</style>