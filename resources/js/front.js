require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');

import AOS from 'aos';
import 'aos/dist/aos.css';

import VueCarousel from 'vue-carousel';
import App from './components/App';

Vue.use(VueCarousel);

const app = new Vue({
    el: '#app',
    render: h => h(App),
    mounted() {
        AOS.init()
    },
});