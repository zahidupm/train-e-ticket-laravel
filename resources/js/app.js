import './bootstrap';
import Vue from 'vue';
// import Vue from "/node_modules/.vite/deps/vue.js?v=0ea7aa5d";

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
let Vue;
Vue.component('add-train', require('./components/AddTrain.vue'))
