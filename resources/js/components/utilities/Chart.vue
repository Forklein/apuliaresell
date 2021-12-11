<template>
  <div class="small">
    <line-chart :chart-data="datacollection"></line-chart>
  </div>
</template>

<script>
import LineChart from "./LineChart.js";

export default {
  components: {
    LineChart,
  },
  data() {
    return {
      datacollection: "",
    };
  },
  created() {
    this.fillData();
  },
  methods: {
    fillData() {
      this.datacollection = {
        labels: [0, 100],
        datasets: [
          {
            label: "Clients",
            backgroundColor: "#6d81fd",
            data: [0, 100],
          },
          {
            label: "Feedback",
            backgroundColor: "#9d75fd",
            data: [0, 90],
          },
        ],
      };
    },
    getRandomInt() {
      return Math.floor(Math.random() * (50 - 5 + 1)) + 5;
    },
  },
};
</script>

<style>
.small {
  max-width: 600px;
  margin: 150px auto;
}
</style>