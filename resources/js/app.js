/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import store from './stores/index'
import VeeValidate, { Validator } from 'vee-validate'
import router from './plugins/router'

import './filters/nl2br'
import './plugins/uuid'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('Testable', require('./components/Testable.vue').default);
Vue.component('ProjectForm', require('./components/ProjectForm.vue').default);
Vue.component('TestForm', require('./components/TestForm.vue').default);
Vue.component('ScenarioForm', require('./components/ScenarioForm.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const vueTestable = new Vue({
    el: '#vue-testable',
    store,
    router
});
