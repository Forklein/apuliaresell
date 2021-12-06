<template>
  <main>
    <section id="jumbotron">
      <article class="wrapper">
        <h2 class="title" style="font-size: 150px">Apuliaresell</h2>
      </article>
    </section>
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

.wrapper {
  animation: scroll 70s linear infinite;
  background: url("https://i.pinimg.com/originals/2d/21/3d/2d213d36f66c318754bd4b78ab9361f1.jpg"),
    #111111;
  color: #eee;
  height: 100vh;
  min-width: 360px;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 1000px;
  perspective-origin: 50% 50%;
}

@keyframes scroll {
  100% {
    background-position: 0px -3000px;
  }
}

@media (prefers-reduced-motion) {
  .wrapper {
    animation: scroll 200s linear infinite;
  }
}

@media (min-width: 670px) {
  .title {
    font-size: 5rem;
  }
}
</style>