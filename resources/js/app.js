import './bootstrap';
import { createApp } from 'vue';
import router from './router.js';
import AddToCart from './components/AddToCart.vue';
import NavbarCart from './components/NavbarCart.vue';
import  Toaster  from '@meforma/vue-toaster';
import ShoppingCart from './components/ShoppingCart.vue';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

 //DebugBar.init();

const app = createApp({});
app.use(router);
app.component('add-to-cart', AddToCart);
app.component('navbar-cart', NavbarCart);
app.component('shopping-cart', ShoppingCart);



app.use(Toaster).provide('toast', app.config.globalProperties.$toast);

app.mount('#app');
