import './bootstrap';
import { createApp } from 'vue';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

 //DebugBar.init();

const app = createApp({});



app.mount('#app');
