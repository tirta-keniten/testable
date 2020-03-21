
import ProjectServices from './../services/projects'

const state = {
    items: [],
}

const getters = {

}

const actions = {
    async getAll ({ commit }, payload) {
        const response = await ProjectServices.index()
        if (response.status == 200) {
            commit('SET_ALL_PROJECT', response.data.data)
        }
    },
    async store ({ commit }, data) {
        return await ProjectServices.store(data)
    }
}

const mutations = {
    SET_ALL_PROJECT (state, payload) {
        state.items = payload
    }
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,
}
