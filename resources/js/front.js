require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');


import VueCarousel from 'vue-carousel';
import App from './components/App';
Vue.use(VueCarousel);

const app = new Vue({
    el: '#app',
    render: h => h(App),
});