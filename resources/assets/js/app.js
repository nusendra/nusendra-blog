import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import Bulma from 'bulma'
import VueSlugify from 'vue-slugify'
import Multiselect from 'vue-multiselect'
import Datepicker from 'vue-bulma-datepicker'
import VueFroala from 'vue-froala-wysiwyg'

require('froala-editor/js/froala_editor.pkgd.min')
require('froala-editor/css/froala_editor.pkgd.min.css')
require('font-awesome/css/font-awesome.css')
require('froala-editor/css/froala_style.min.css')

window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueSlugify);
Vue.use(VueFroala)

Vue.component('multiselect', Multiselect)
Vue.component('datepicker', Datepicker)

window.$ = window.jQuery = require('jquery');

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
