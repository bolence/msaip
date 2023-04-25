<template>
<div>

    <CarForm :hideForm="hideForm" />

    <div class="card my-5">
        <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-text">My favorite manufacturers</h5>
        </div>
            <table class="table table-striped table-bordered my-3" >
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Car</th>
                        <th scope="col">Model</th>

                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(favorite, index) in favoriteManufacturers" :key="index">
                        <th scope="row">{{ favorite.id }}</th>
                        <td>{{favorite.manufacturer.manufacturer}}</td>
                        <td>{{favorite.manufacturer_model.name}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</template>

<script>
import CarForm from "./CarFormComponent.vue";
import {mapActions, mapGetters} from 'vuex';
export default {
    components: {
        CarForm,
    },
    data() {
        return {
            hideForm: false,
        }
    },

    computed: {
        ...mapGetters({
            favoriteManufacturers: 'favoriteManufacturers/favoriteManufacturers'
        }),
    },

    mounted() {
        this.getFavoriteManufacturers();
    },

    methods: {

        ...mapActions({
            getFavoriteManufacturers: 'favoriteManufacturers/getFavoriteManufacturers'
        })


    },
}
</script>
