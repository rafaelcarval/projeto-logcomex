<template>
    <div>
      <h1>Lista de Tarefas</h1>
      <ul>
        <li v-for="task in tasks" :key="task.id">{{ task.title }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        tasks: []
      };
    },
    created() {
      this.fetchTasks();
    },
    methods: {
      async fetchTasks() {
        const response = await fetch('/api/tasks');
        this.tasks = await response.json();
      }
    }
  };
  </script>
  