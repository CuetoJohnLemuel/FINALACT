import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'
import axios from 'axios'

axios.defaults.baseURL="http://finalact.test/"

createApp(App).use(router).mount('#app')
