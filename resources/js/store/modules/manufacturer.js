import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const state = {
    manufacturers: [],
    manufacturersModels: [],
}


const getters = {
    manufacturers: state => state.manufacturers,
    manufacturersModels: state => state.manufacturersModels,
}

const mutations = {
    setManufacturers(state, manufacturers) {
        state.manufacturers = manufacturers;
    },

    setManufacturersModels(state, manufacturersModels) {
        state.manufacturersModels = manufacturersModels;
    },
}


const actions = {
    getManufacturers({commit}) {
        return new Promise((resolve, reject) => {
            axios.get('/api/manufacturers').then(resp => {
                resolve(resp.data);
                commit('setManufacturers', resp.data.manufacturers);
            }).catch(error =>  {
                reject(error.response.data);
            });
        })
    },

    getManufacturersModels({commit}, payload) {
        return new Promise((resolve, reject) => {
            axios.get(`/api/manufacturers/${payload.manufacturer}`).then(resp => {
                resolve(resp.data);
                commit('setManufacturersModels', resp.data.models_manufacturers);
            }).catch(error => {
                reject(error.response.data);
            })
        })

    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
};
