import './bootstrap';
import { createApp } from 'vue';
import AddToCart from './components/AddToCart.vue';
import NavbarCart from './components/NavbarCart.vue';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

 //DebugBar.init();

const app = createApp({});
app.component('add-to-cart', AddToCart);
app.component('navbar-cart', NavbarCart);



app.mount('#app');
