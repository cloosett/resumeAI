import { createApp } from 'vue'
import CreateResume from './components/CreateResume.vue'
import Examples from './components/Examples.vue'

const app = createApp({});

app.component('CreateResume', CreateResume)
app.component('Examples', Examples)

app.mount('#app')
