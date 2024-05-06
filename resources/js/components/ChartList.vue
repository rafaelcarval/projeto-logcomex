<template>
    <div>
      <ChartComponent
        v-if="showChart"
        :chartType="'line'"
        :chartData="lineChartData"
        :chartOptions="lineChartOptions"
        chartTitle="Gráfico de Linha"
      />
      <ChartComponent
        v-if="showChart"
        :chartType="'bar'"
        :chartData="barChartData"
        :chartOptions="barChartOptions"
        chartTitle="Gráfico de Barras"
      />
      <ChartComponent
        v-if="showChart"
        :chartType="'radar'"
        :chartData="radarChartData"
        :chartOptions="radarChartOptions"
        chartTitle="Gráfico de Radar"
      />
      <ChartComponent
        v-if="showChart"
        :chartType="'doughnut'"
        :chartData="doughnutChartData"
        :chartOptions="doughnutChartOptions"
        chartTitle="Gráfico de Rosca"
      />
      <ChartComponent
        v-if="showChart"
        :chartType="'polarArea'"
        :chartData="polarAreaChartData"
        :chartOptions="polarAreaChartOptions"
        chartTitle="Gráfico de Área Polar"
      />
      <ChartComponent
        v-if="showChart"
        :chartType="'pie'"
        :chartData="pieChartData"
        :chartOptions="pieChartOptions"
        chartTitle="Gráfico de Pizza"
      />
    </div>
  </template>
  
  <script>
  import { ref } from 'vue';
  import ChartComponent from './ChartComponent.vue';
  
  export default {
    components: {
      ChartComponent
    },
    data() {
      return {
        showChart: true,
        lineChartData: {
          labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
          datasets: [
            {
              label: 'Vendas',
              data: [65, 59, 80, 81, 56, 55],
              borderColor: 'rgba(255, 99, 132, 1)',
              borderWidth: 1
            }
          ]
        },
        lineChartOptions: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        },
        barChartData: {
          labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
          datasets: [
            {
              label: 'Vendas',
              data: [65, 59, 80, 81, 56, 55],
              backgroundColor: 'rgba(54, 162, 235, 0.2)',
              borderColor: 'rgba(54, 162, 235, 1)',
              borderWidth: 1
            }
          ]
        },
        barChartOptions: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        },
        radarChartData: {
          labels: ['Vendas', 'Marketing', 'Desenvolvimento', 'Suporte', 'Recursos Humanos'],
          datasets: [
            {
              label: 'Equipe 1',
              data: [65, 59, 90, 81, 56],
              backgroundColor: 'rgba(255, 99, 132, 0.2)',
              borderColor: 'rgba(255, 99, 132, 1)',
              borderWidth: 1
            },
            {
              label: 'Equipe 2',
              data: [28, 48, 40, 19, 96],
              backgroundColor: 'rgba(54, 162, 235, 0.2)',
              borderColor: 'rgba(54, 162, 235, 1)',
              borderWidth: 1
            }
          ]
        },
        radarChartOptions: {
          elements: {
            line: {
              tension: 0,
              borderWidth: 3
            }
          }
        },
        doughnutChartData: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [
            {
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
            }
          ]
        },
        doughnutChartOptions: {
          responsive: true
        },
        polarAreaChartData: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
          datasets: [
            {
              label: 'My First Dataset',
              data: [11, 16, 7, 3, 14],
              backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
              ],
              borderWidth: 1
            }
          ]
        },
        polarAreaChartOptions: {
          scale: {
            ticks: {
              beginAtZero: true
            }
          }
        },
        pieChartData: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
          datasets: [
            {
              label: 'My First Dataset',
              data: [300, 50, 100, 40, 120],
              backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
              ],
              borderWidth: 1
            }
          ]
        },
        pieChartOptions: {
          responsive: true
        }
      };
    }
  };
  </script>
  