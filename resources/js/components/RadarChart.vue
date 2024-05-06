<template>
  <div>
    <chart-component
      v-if="showChart && chartData.labels.length > 0"
      :chartType="'radar'"
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
      chartTitle: "Gráfico de Radar",
      chartData: {
        labels: [],
        datasets: [
          {
            label: 'Dados',
            data: [],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
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
    // Chama a função fetchData() quando o componente é montado para carregar os dados do endpoint
    this.fetchData();
  }
};
</script>
