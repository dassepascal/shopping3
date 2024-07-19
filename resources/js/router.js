
import { createRouter, createWebHistory } from 'vue-router'


import NotFound from './components/NotFound.vue'
import Register from './components/Register.vue'

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
  }
]

export default createRouter({
  history: createWebHistory(),
  routes
});

