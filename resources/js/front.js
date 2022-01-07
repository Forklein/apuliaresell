require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');

import AOS from 'aos';
import 'aos/dist/aos.css';
import Vue from 'vue';

import VueCarousel from 'vue-carousel';

import Donut from 'vue-css-donut-chart';
import 'vue-css-donut-chart/dist/vcdonut.css';

Vue.use(VueCarousel);
Vue.use(Donut);


import App from './components/App';
const app = new Vue({
    el: '#app',
    render: h => h(App),
    mounted() {
        AOS.init()
    },
});