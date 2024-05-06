<template>
  <vue-good-table
    :columns="columns"
    :rows="rows"
    :pagination-options="{
      enabled: true,
      mode: 'records'
    }"
    styleClass="vgt-table striped"
  ></vue-good-table>
</template>

<script>
import 'vue-good-table-next/dist/vue-good-table-next.css'
import axios from 'axios';
import { VueGoodTable } from 'vue-good-table-next';

export default {
  components: {
    VueGoodTable
  },
  data() {
    return {
      columns: [],
      rows: []
    };
  },
  async created() {
    try {
      // Fazer a solicitação HTTP para obter os dados do endpoint
      const baseUrl = window.location.origin;
      const response = await axios.get(baseUrl + '/api/data');

      // Mapear os dados para criar as colunas
      this.columns = Object.keys(response.data[0]).map(key => ({
        label: key === 'dob' ? 'Date of Birth' : key, // Se a chave for 'dob', substituir por 'Date of Birth'
        field: key,
        type: key === 'dob' ? 'date' : 'text' // Definir o tipo da coluna
      }));

      // Definir as linhas com os dados obtidos do endpoint
      this.rows = response.data;
    } catch (error) {
      console.error('Erro ao obter dados do endpoint:', error);
    }
  }
};
</script>
