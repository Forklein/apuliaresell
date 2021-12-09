<template>
  <main>
    <section id="jumbotron">
      <h2 class="title mb-5 text-center" style="font-size: 65px">
        Apuliaresell
      </h2>
      <div class="container d-flex">
        <div class="col-8 text-white">
          <p class="h3">Apuliaresell is a reselling page of Sneakers</p>
        </div>
        <div class="col-4">
          <img class="img-fluid" src="../images/imac_banner.png" alt="imac" />
        </div>
      </div>
    </section>
    <section id="shoes">
      <div class="container p-3">
        <carousel per-page="1" mouse-drag="true" autoplay="true" loop="true">
          <slide v-for="image in images" :key="image.id">
            <ShoesCard class="col-6 mx-auto" :data="image" />
          </slide>
        </carousel>
      </div>
    </section>
    <section id="form">
      <Form />
    </section>
    <Loader v-if="isLoading" />
  </main>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";

import ShoesCard from "./shoes/ShoesCard";
import Form from "./utilities/Form";
import Loader from "./utilities/Loader";

export default {
  name: "Content",
  components: {
    Carousel,
    Slide,
    ShoesCard,
    Form,
    Loader,
  },
  data() {
    return {
      images: [],
      baseUri: "http://127.0.0.1:8000/",
      isLoading: false,
    };
  },
  async created() {
    try {
      this.isLoading = true;
      const images = await axios.get(`${this.baseUri}api/images`);
      this.images = images.data.images;
    } catch (error) {
      console.log(error);
    } finally {
      setTimeout(() => (this.isLoading = false), 1500);
    }
  },
};
</script>

<style lang="scss" scoped>
.title {
  font-family: "Lobster", cursive;
  text-shadow: 16px 22px 11px rgba(0, 0, 0, 0.5);
  color: rgba(168, 158, 32, 0.8);
}

#jumbotron {
  background: rgb(109, 129, 253);
  background: linear-gradient(
    90deg,
    rgba(109, 129, 253, 1) 0%,
    rgba(185, 111, 253, 1) 70%
  );
  background-attachment: fixed;
  background-position: center;
  .title {
    font-family: "Lobster", cursive;
    text-shadow: 16px 22px 11px rgba(0, 0, 0, 0.5);
    color: rgba(168, 158, 32, 0.8);
  }
}
</style>