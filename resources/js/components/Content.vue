<template>
  <main>
    <section id="jumbotron">
      <div class="container d-flex">
        <div class="col-7 text-white">
          <!-- <p class="h3">Apuliaresell is a reselling page of Sneakers</p> -->
        </div>
        <div class="col-5 test">
          <img class="img-fluid" src="images/imac_banner.png" alt="imac" />
        </div>
      </div>
    </section>
    <section id="about" class="mt-3">
      <div class="container">
        <h2 class="text-center text-white my-3">About</h2>
        <div class="row justify-content-around text-center">
          <div v-for="(data, index) in about" :key="index" class="col-3">
            <div class="card">
              <div class="card-header">
                <strong>{{ data.name }}</strong>
                <p class="my-3" v-html="data.icon"></p>
              </div>
              <div class="card-body">
                <p>{{ data.description }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="shoes" class="mt-3">
      <div class="container-fluid">
        <h2 class="text-center text-white my-3">Our products</h2>
        <carousel
          :per-page="4"
          :mouse-drag="true"
          :autoplay="true"
          :loop="true"
        >
          <slide v-for="image in images" :key="image.id">
            <ShoesCard class="mx-2" :data="image" />
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
import about from "./data/about.js";

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
      about,
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
#jumbotron {
  background: rgb(109, 129, 253);
  background: linear-gradient(
    90deg,
    rgba(109, 129, 253, 1) 0%,
    rgba(185, 111, 253, 1) 70%
  );
  background-attachment: fixed;
  background-position: center;
}
</style>