<template>
  <div class="card">
    <img
      :src="baseUri + `storage/${data.image}`"
      class="card-img-top"
      alt="..."
    />
    <div class="card-body">
      <h5 class="card-title">{{ data.name }}</h5>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
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