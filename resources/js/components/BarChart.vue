<template>
  <div>
    <chart-component
      v-if="showChart && chartData.labels.length > 0"
      :chartType="'bar'"
      :chartData="chartData"
      :chartOptions="chartOptions"
      :chartTitle="chartTitle"
    />
  </div>
</template>

<script>
import axios from 'axios';
import ChartComponent from './ChartComponent.vue';

export default {
  components: {
    ChartComponent
  },
  props: {
    showChart: {
      type: Boolean,
      default: true
    }
  },
  data() {
    return {
      chartTitle: "Gráfico de Barras",
      chartData: {
        labels: [],
        datasets: [
          {
            label: 'Vendas',
            data: [],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          }
        ]
      },
      chartOptions: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };
  },
  methods: {
    fetchData() {
      const baseUrl = window.location.origin;
      axios.get(baseUrl + '/api/data/count')
        .then(response => {
          // Atualiza os dados do gráfico com os dados recebidos da API
          this.chartData.labels = Object.keys(response.data);
          this.chartData.datasets[0].data = Object.values(response.data);
        })
        .catch(error => {
          console.error('Erro ao carregar dados do endpoint:', error);
        });
    }
  },
  mounted() {
    this.fetchData();
  }
};
</script>
