
require('./bootstrap');

window.Vue = require('vue').default;

import 'bootstrap/dist/css/bootstrap.min.css'

import { store } from './store/store'
import VueAWN from 'vue-awesome-notifications';
require('vue-awesome-notifications/dist/styles/style.css');

Vue.use(VueAWN, {
    position: 'top-right',
})


const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


const app = new Vue({
    el: '#app',
    store,
});
