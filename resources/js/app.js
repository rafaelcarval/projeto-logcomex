import { createApp } from "vue/dist/vue.esm-bundler";
import axios from 'axios';
import Sidebar from './components/Sidebar.vue';
import Menulist from './components/Menulist.vue';
import LineChart from './components/LineChart.vue';
import BarChart from './components/BarChart.vue';
import RadarChart from './components/RadarChart.vue';
import DoughnutChart from './components/DoughnutChart.vue';
import PolarAreaChart from './components/PolarAreaChart.vue';
import PieChart from './components/PieChart.vue';
import DataGrid from './components/DataGrid.vue';
import VueGoodTableNext  from 'vue-good-table-next';

const app = createApp({
    data() {
        return {
            chartData: {
                line: {}, // Inicialize com os dados vazios
                bar: {}, // Inicialize com os dados vazios
                radar: {}, // Inicialize com os dados vazios
                doughnut: {}, // Inicialize com os dados vazios
                polarArea: {}, // Inicialize com os dados vazios
                pie: {} // Inicialize com os dados vazios
            }
        };
    },
    components: {
        Sidebar,
        Menulist,
        LineChart,
        BarChart,
        RadarChart,
        DoughnutChart,
        PolarAreaChart,
        PieChart,
        DataGrid,
        VueGoodTableNext
    },
    methods: {
        updateCharts(data) {
          console.log(data); // Adicione esta linha para verificar os dados recebidos pelo evento
          // Atualizar os dados dos gráficos com os dados recebidos do evento
          console.log('datasets',this.chartData.bar)
          this.chartData.line = data;
          this.chartData.bar.labels = Object.keys(data);
          //this.chartData.bar.datasets.data = Object.values(data);
          //this.chartData.bar = data;
          this.chartData.radar = data;
          this.chartData.doughnut = data;
          this.chartData.polarArea = data;
          this.chartData.pie = data;
        }
      }      
});

app.use(VueGoodTableNext );
// Realize a montagem 
app.mount('#app');
