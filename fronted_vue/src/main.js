import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import Master from './components/layouts/master.vue'

const app = createApp(App)

app.use(createPinia())
app.use(router)
app.component('Master', Master)

app.mount('#app')
