import Vue from 'vue';
import Vuex from 'vuex';
import manufacturers from './modules/manufacturer';
import favoriteManufacturers from './modules/favoriteManufacturer';

Vue.use(Vuex);

export const store = new Vuex.Store({
    modules: {
        manufacturers,
        favoriteManufacturers

    }
})
