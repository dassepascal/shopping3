import './bootstrap';
import { createApp } from 'vue';
import IncrementCounter from './components/IncrementCounter.vue';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

 //DebugBar.init();

const app = createApp({});

app.component('increment-counter', IncrementCounter);

app.mount('#app');
