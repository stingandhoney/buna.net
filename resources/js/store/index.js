import {createStore} from 'vuex'
import document from '../store/modules/document/index'

const store = createStore({
    state() {
        return {}
    },
    mutations: {},
    actions: {},
    getters: {},
    modules: document
})

export default store
