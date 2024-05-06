<template>
  <aside>
    <div class="sidebar">
      <h3>Filtros</h3>
      <select v-model="selectedType" class="form-select mb-3">
        <option value="">Selecione um tipo</option>
        <option value="char_field">Char</option>
        <option value="varchar_field">Varchar</option>
        <option value="text_field">Text</option>
        <option value="integer_field">Integer</option>
      </select>
      <button class="btn btn-primary mt-3" @click="updateCharts">Atualizar Gráficos</button>
    </div>
  </aside>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      selectedType: ''
    };
  },
  methods: {
    async updateCharts() {
      try {
        const baseUrl = window.location.origin;
        const response = await axios.get(baseUrl + '/api/count-data/' + this.selectedType);
        console.log(response.data); // Adicione esta linha para verificar os dados recebidos
        this.$emit('update-charts', response.data);
      } catch (error) {
        console.error('Erro ao atualizar os gráficos:', error);
      }
    }
  }
}
</script>
