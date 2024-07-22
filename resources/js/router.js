
import { createRouter, createWebHistory } from 'vue-router'


import NotFound from './components/NotFound.vue'

import Home from './components/Home.vue'
import Commande from './components/Commande.vue'



const routes = [
  {
    path:'/home',
    name:'Home',
    component : Home,
    redirect:'/'
  },
    {
        path: '/commande',
        name: 'Commande',
        component: Commande

    }



]

export default createRouter({
  history: createWebHistory(),
  routes
});

