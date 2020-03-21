
import Vue from 'vue'
import Vuex from 'vuex'

import Project from './project'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

const store = new Vuex.Store({
    modules: {
        Project
    }
})

export default store
