import { createApp } from 'vue'
import CreateResume from './components/CreateResume.vue'

const app = createApp({});

app.component('CreateResume', CreateResume)

app.mount('#app')
