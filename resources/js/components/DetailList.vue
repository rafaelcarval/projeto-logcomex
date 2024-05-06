<template>
    <div>
      <h2>Detalhes da Lista</h2>
      <ul>
        <li v-for="detail in details" :key="detail.id">{{ detail.name }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        details: [
          { id: 1, name: 'Detalhe 1' },
          { id: 2, name: 'Detalhe 2' },
          { id: 3, name: 'Detalhe 3' }
        ]
      };
    }
  }
  </script>
  