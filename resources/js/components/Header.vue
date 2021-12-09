<template>
  <header>
    <nav class="custom-navbar navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand text-white" href="/">
          <h2 class="title mb-5 text-center" style="font-size: 45px">
            Apuliaresell
          </h2>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link navbar-toggler" href="#">Home</a>
            <a class="nav-link navbar-toggler" href="#">Features</a>
            <a class="nav-link navbar-toggler" href="#">Pricing</a>
          </div>
        </div>
        <div class="navbar-nav">
          <a class="nav-link text-white" href="#">Home</a>
          <a class="nav-link text-white" href="#">Features</a>
          <a class="nav-link text-white" href="#">Pricing</a>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style lang="scss" scoped>
@import "../../sass/variables";

.custom-navbar {
  background: rgb(109, 129, 253);
  background: linear-gradient(
    90deg,
    rgba(109, 129, 253, 1) 0%,
    rgba(185, 111, 253, 1) 70%
  );
  .title {
    font-family: "Lobster", cursive;
    text-shadow: 16px 22px 11px rgba(0, 0, 0, 0.5);
    color: $text-logo;
  }
}
</style>