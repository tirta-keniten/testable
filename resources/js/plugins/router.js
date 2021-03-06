
import VueRouter from 'vue-router'
import Vue from 'vue'

import Index from './../pages/index.vue'
import ProjectIndex from './../pages/projects/index.vue'
import ProjectCreate from './../pages/projects/create.vue'
import TestCreate from './../pages/tests/create.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '/testable',
        name: 'testable',
        component: Index,
    },
    {
        path: '/testable/projects',
        name: 'testable.projects',
        component: ProjectIndex,
    },
    {
        path: '/testable/projects/create',
        name: 'testable.projects.create',
        component: ProjectCreate,
    },
    {
        path: '/testable/tests/create',
        name: 'testable.tests.create',
        component: TestCreate,
    },
]

export default new VueRouter({
    mode: 'history',
    routes,
});
