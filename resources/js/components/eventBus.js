import { reactive, provide } from 'vue';

// Criando um objeto reativo para o Event Bus
const eventBus = reactive({});

// Método para emitir eventos
eventBus.emit = (eventName, eventData) => {
  eventBus[eventName] = eventData;
};

// Método para registrar ouvintes de eventos
eventBus.listen = (eventName, callback) => {
  provide(eventName, callback);
};

export { eventBus };
