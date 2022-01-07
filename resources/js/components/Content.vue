<template>
  <main>
    <Loader v-if="isLoading" />
    <section id="jumbotron">
      <div class="container d-flex">
        <div class="col-7 text-white">
          <div class="description py-5">
            <p class="h3" data-aos="zoom-in" data-aos-delay="500">
              Apuliaresell is a reselling page of Sneakers
            </p>
            <button class="btn btn-primary">Learn more</button>
          </div>
        </div>
        <div class="col-5">
          <img class="img-fluid" src="images/imac_banner.png" alt="imac" />
        </div>
      </div>
    </section>
    <section id="shoes" class="my-3">
      <div class="container-fluid p-5">
        <h2 class="text-center text-white my-3">Our products</h2>
        <h2 class="text-center text-white my-3" v-if="errorApi">
          Error please reload the page
        </h2>
        <carousel
          :navigationEnabled="true"
          navigationPrevLabel="<i class='fas text-white fa-arrow-circle-left fa-2x'></i>"
          navigationNextLabel="<i class='fas text-white fa-arrow-circle-right fa-2x'></i>"
          :autoplay="true"
          :per-page="5"
          :mouse-drag="true"
          :loop="true"
        >
          <slide v-for="image in images" :key="image.id">
            <ShoesCard :data="image" />
          </slide>
        </carousel>
      </div>
    </section>
    <section id="about" class="mt-3">
      <div class="container">
        <h2 class="text-center text-white my-3">About</h2>
        <div class="row justify-content-around text-center">
          <div
            v-for="(data, index) in about"
            :key="index"
            class="col-sm-12 col-md-3 my-sm-3"
          >
            <div class="card h-100">
              <div class="card-header">
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
    <section id="charts" class="mt-3">
      >
      <Chart />
    </section>
    <section id="form" class="p-3">
      <Form />
    </section>
  </main>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";

//components
import ShoesCard from "./shoes/ShoesCard";
import Form from "./utilities/Form";
import Chart from "./utilities/Chart";
//utilities
import Loader from "./utilities/Loader";
//data
import about from "./data/about.js";

export default {
  name: "Content",
  components: {
    Carousel,
    Slide,
    ShoesCard,
    Form,
    Loader,
    Chart,
  },
  data() {
    return {
      images: [],
      baseUri: "http://127.0.0.1:8000/",
      isLoading: false,
      about,
      errorApi: false,
    };
  },
  async created() {
    try {
      this.isLoading = true;
      const images = await axios.get(`${this.baseUri}api/images`);
      this.images = images.data.images;
    } catch (error) {
      console.log(error);
      this.errorApi = true;
    } finally {
      setTimeout(() => (this.isLoading = false), 1500);
    }
  },
};
</script>

<style lang="scss" scoped>
#shoes {
  background-color: rgba(19, 20, 29, 0.5);
}
#form {
  background-color: rgba(19, 20, 29, 0.5);
}
#slide {
  &:hover {
    transition: transform 0.5s linear;
    transform: translateY(-50px);
    border: 2px solid #9d75fd;
  }
}
</style>