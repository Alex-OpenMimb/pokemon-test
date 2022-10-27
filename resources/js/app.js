require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';

// Vue.use(Vue);


Vue.component('pokemon', require('./components/Pokemon.vue').default);


const app = new Vue({
    el: '#main-app',
  });