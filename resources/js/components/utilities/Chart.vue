<template>
  <div>
    <!-- <line-chart :chart-data="datacollection"></line-chart> -->
    <vc-donut v-bind="props">
      <small>
        <strong id="text"
          >Apuliaresell <br />
          Products</strong
        >
      </small>
    </vc-donut>
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
      props: {
        size: 250,
        sections: [
          { label: "Jordan 40%", value: 40 },
          { label: "Yeezy 20%", value: 20 },
          { label: "Nike 30%", value: 30 },
          { label: "Other 10%", value: 10 },
        ],
        thickness: 20,
        hasLegend: true,
        background: "#dedede",
      },
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