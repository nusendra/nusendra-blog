import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import Bulma from 'bulma'
import VueSlugify from 'vue-slugify'
import Multiselect from 'vue-multiselect'
import Datepicker from 'vue-bulma-datepicker'
import wysiwyg from "vue-wysiwyg"

window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueSlugify);
Vue.use(wysiwyg, {});

Vue.component('multiselect', Multiselect)
Vue.component('datepicker', Datepicker)

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

import router from './routes';

new Vue({
    el: '#app',
    router
});
