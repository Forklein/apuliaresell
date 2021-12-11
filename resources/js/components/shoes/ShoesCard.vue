<template>
  <div class="card pointer mx-2 bg-light text-center shadow">
    <img
      :src="
        data.image.includes('public')
          ? baseUri + `storage/${data.image}`
          : data.image
      "
      class="card-img-top"
      :alt="data.name"
    />
    <div class="card-body" style="height: 100px">
      <strong class="card-title">{{ data.name }}</strong>
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

<style lang="scss" scoped>
.pointer {
  cursor: pointer;
}
</style>