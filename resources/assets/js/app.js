
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./fontawesome');

window.Vue = require('vue');

import VueIziToast from "vue-izitoast";
import "izitoast/dist/css/iziToast.min.css";
import Authorization from './authorization/authorize';

Vue.use(VueIziToast);
Vue.use(Authorization);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('user-info', require('./components/UserInfo.vue'));
Vue.component('answer', require('./components/Answer.vue'));
Vue.component("favorite", require("./components/Favorite.vue"));
Vue.component("accept", require("./components/Accept.vue"));




const app = new Vue({
    el: '#app'
});
