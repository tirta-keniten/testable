
const baseUrl = '/testable/api/projects'

const index = (params) => {
    return axios.get(baseUrl, { params })
}

const store = (data) => {
    return axios.post(baseUrl, data)
}

export default {
    index,
    store
}
