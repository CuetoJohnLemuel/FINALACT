import { createRouter, createWebHistory } from 'vue-router'
import tmp from '../views/applicant/tmp.vue'


const routes = [
  {
    path: '/',
    name: 'tmp',
    component: tmp
  },

]


const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
