<template>
    <div>
      <h2>{{ chartTitle }}</h2>
      <canvas ref="chartCanvas"></canvas>
    </div>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
  import Chart from 'chart.js/auto';
  
  export default {
    props: {
      chartType: String,
      chartData: Object,
      chartOptions: Object,
      chartTitle: String
    },
    setup(props) {
      const chartCanvas = ref(null);
  
      onMounted(() => {
        const ctx = chartCanvas.value.getContext('2d');
        new Chart(ctx, {
          type: props.chartType,
          data: props.chartData,
          options: props.chartOptions
        });
      });
  
      return {
        chartCanvas
      };
    }
  };
  </script>
  