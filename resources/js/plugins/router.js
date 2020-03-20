
import VueRouter from 'vue-router'
import Vue from 'vue'

import Home from './../pages/index.vue'

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/home',
            name: 'home',
            component: Home,
        },
    ],
});
