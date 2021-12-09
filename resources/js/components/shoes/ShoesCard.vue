<template>
  <div class="card">
    <img
      :src="
        data.image.includes('public')
          ? baseUri + `storage/${data.image}`
          : data.image
      "
      class="card-img-top"
      :alt="data.name"
    />
    <div class="card-body">
      <h5 class="card-title">{{ data.name }}</h5>
    </div>
  </div>
</template>

<script>
export default {
  name: "ShoesCard",
  props: ["data"],
  data() {
    return {
      baseUri: "http://127.0.0.1:8000/",
    };
  },
};
</script>

<style>
</style>