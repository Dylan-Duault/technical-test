import './bootstrap';

import { createApp } from 'vue';
import Screenshot from './components/Screenshot.vue';

createApp({})
    .component('Screenshot', Screenshot)
    .mount('#app')
