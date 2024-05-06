<template>
  <div>
      <h1>Lista de Tarefas</h1>
      <ul>
          <li v-for="task in tasks" :key="task.id">{{ task.name }}</li>
      </ul>
  </div>
</template>

<script>
export default {
  data() {
      return {
          tasks: [
              { id: 1, name: 'Tarefa 1' },
              { id: 2, name: 'Tarefa 2' },
              { id: 3, name: 'Tarefa 3' }
          ]
      };
  }
}
</script>

<style scoped>
/* Estilos específicos do componente */
</style>
