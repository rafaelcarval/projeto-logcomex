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
      chartTitle: "Contagem de Tipos de Dados",
      chartData: {
        labels: [],
        datasets: [
          {
            label: 'Contagem',
            data: [],
            backgroundColor: [
              'rgba(255, 99, 132, 0.5)',
              'rgba(54, 162, 235, 0.5)',
              'rgba(255, 206, 86, 0.5)',
              'rgba(75, 192, 192, 0.5)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)'
            ],
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
