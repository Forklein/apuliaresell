<template>
  <div class="app">
    <Header />
    <Content />
    <Footer />
  </div>
</template>

<script>
import Header from "./Header";
import Content from "./Content";
import Footer from "./Footer";

export default {
  name: "App",
  components: {
    Header,
    Content,
    Footer,
  },
};
</script>

<style lang="scss">
@import "../../sass/front.scss";
</style>