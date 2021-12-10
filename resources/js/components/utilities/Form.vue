<template>
  <div class="container">
    <div class="row">
      <div class="col-4 mx-auto card p-3">
        <h3>Contact us</h3>
        <p>Fill in the data below</p>
        <div v-if="success" class="alert alert-success" role="alert">
          Thanks for contacting us {{ name }}!
        </div>
        <form v-else action="javascript:void(0);" class="p-3">
          <div class="col-md-12">
            <input
              class="form-control mb-2"
              type="text"
              placeholder="Name"
              v-model="name"
              required
            />
          </div>
          <div class="col-md-12 mb-2">
            <input
              class="form-control"
              type="text"
              placeholder="Surname"
              v-model="surname"
              required
            />
          </div>
          <div class="col-md-12 mb-2">
            <input
              class="form-control"
              type="email"
              placeholder="E-mail Address"
              v-model="email"
              required
            />
          </div>

          <div class="col-md-12 mb-2">
            <textarea
              class="form-control"
              placeholder="Description"
              v-model="description"
              required
            />
          </div>

          <div class="text-center mt-3">
            <button @click="submit" class="btn btn-success">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Form",
  data() {
    return {
      name: "",
      surname: "",
      email: "",
      description: "",
      baseUri: "http://127.0.0.1:8000/",
      success: false,
    };
  },
  methods: {
    async submit() {
      const form = {
        name: this.name,
        surname: this.surname,
        email: this.email,
        description: this.description,
      };
      try {
        const response = await axios({
          method: "post",
          url: `${this.baseUri}api/messages`,
          data: form,
        });
        const { name } = response.data;
        console.log(name);
        this.success = true;
      } catch (error) {
        console.log(error);
      }
    },
  },
};
</script>

<style scoped lang="scss">
</style>