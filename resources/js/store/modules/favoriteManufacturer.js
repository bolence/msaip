import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const state = {
    favoriteManufacturers: [],
}

const getters = {
    favoriteManufacturers: state => state.favoriteManufacturers,
}

const mutations = {
    setFavoriteManufacturers(state, favoriteManufacturers) {
        state.favoriteManufacturers = favoriteManufacturers;
    },
}


const actions = {
    getFavoriteManufacturers({commit}) {
        return new Promise((resolve, reject) => {
            axios.get('/api/favorite_manufacturers')
            .then(resp => {
                resolve(resp.data);
                commit('setFavoriteManufacturers', resp.data.my_saved_manufacturers);
            }).catch(error =>  {
                reject(error.response.data);
            });
        })
    },

    saveFavoriteManufacturers({commit}, payload) {
        return new Promise((resolve, reject) => {
            axios.post('/api/favorite_manufacturers',payload)
            .then(resp => {
                resolve(resp.data);
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
