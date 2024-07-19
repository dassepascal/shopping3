
import { createRouter, createWebHistory } from 'vue-router'


import NotFound from './components/NotFound.vue'
import Register from './components/Register.vue'
import Home from './components/Home.vue'

const routes = [

  {
    path: '/register',
    name: 'Register',
    component: Register
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    component: NotFound
  },
  {
    path:'/home',
    name:'Home',
    component : Home,
    redirect:'/'


  }
]

export default createRouter({
  history: createWebHistory(),
  routes
});

