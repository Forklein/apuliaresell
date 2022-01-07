<template>
  <div class="small">
    <!-- <line-chart :chart-data="datacollection"></line-chart> -->
    <vc-donut
      background="#00F0F8FF"
      text="Apuliaresell Feedback"
      :sections="sections"
    ></vc-donut>
  </div>
</template>

<script>
// import LineChart from "./LineChart.js";

export default {
  name: "Chart",
  // components: {
  //   LineChart,
  // },
  data() {
    return {
      // datacollection: "",
      sections: [{ value: 25 }, { value: 25 }],
    };
  },
  created() {
    // this.fillData();
  },
  methods: {
    // fillData() {
    //   this.datacollection = {
    //     labels: [0, 100],
    //     datasets: [
    //       {
    //         label: "Clients",
    //         backgroundColor: "#6d81fd",
    //         data: [0, 100],
    //       },
    //       {
    //         label: "Feedback",
    //         backgroundColor: "#9d75fd",
    //         data: [0, 90],
    //       },
    //     ],
    //   };
    // },
  },
};
</script>

<style lang="scss" scoped>
.small {
  max-width: 600px;
  margin: 150px auto;
}
</style>