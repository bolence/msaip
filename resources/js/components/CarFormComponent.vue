<template>
    <div class="card">
        <div class="card-body">
            <h5 class="card-text">Save new car</h5>

            <form>
                <div class="form-group my-2">
                    <label for="manufacturers">Manufacturers</label>
                    <select
                        class="form-control"
                        v-model="manufacturer"
                        if="manufacturers"
                        :class="{ 'is-invalid': errors.manufacturer_id }"
                        @change="manufacturersModels()"
                    >
                        <option :value="null" selected>
                            Select manufacturer
                        </option>
                        <option
                            v-for="(manufacturer, index) in manufacturers"
                            :key="index"
                            :value="manufacturer.id"
                        >
                            {{ manufacturer.manufacturer }}
                        </option>
                    </select>
                    <small
                        class="form-text text-danger"
                        v-if="errors.manufacturer_id"
                    >
                        {{ errors.manufacturer_id[0] }}
                    </small>
                </div>
                <div class="form-group">
                    <label for="manufacturersModels">Car models</label>
                    <select
                        v-model="manufacturerModel"
                        class="form-control"
                        id="manufacturersModels"
                        :class="{ 'is-invalid': errors.manufacturer_model_id }"
                    >
                        <option :value="null" selected>
                            Select manufacturer model
                        </option>
                        <option
                            v-for="(model, index) in manufacturerModels"
                            :key="index"
                            :value="model.id"
                        >
                            {{ model.name }}
                        </option>
                    </select>
                    <small
                        class="form-text text-danger"
                        v-if="errors.manufacturer_model_id"
                    >
                        {{ errors.manufacturer_model_id[0] }}
                    </small>
                </div>

                <a
                    class="btn btn-primary float-end my-2"
                    @click.prevent="saveCars()"
                    >Save</a
                >
            </form>
        </div>
    </div>
</template>

<script>
import { mapActions, mapGetters, mapMutations } from "vuex";
export default {
    props: ["hideForm"],
    data() {
        return {
            manufacturer: null,
            manufacturerModel: null,
            errors: {},
        };
    },
    computed: {
        ...mapGetters({
            manufacturers: "manufacturers/manufacturers",
            manufacturerModels: "manufacturers/manufacturersModels",
        }),
    },
    mounted() {
        this.getManufacturers();
    },

    methods: {
        ...mapActions({
            getManufacturers: "manufacturers/getManufacturers",
            getManufacturersModels: "manufacturers/getManufacturersModels",
            getFavoriteManufacturers:
                "favoriteManufacturers/getFavoriteManufacturers",
            saveFavoriteManufacturers:
                "favoriteManufacturers/saveFavoriteManufacturers",
        }),

        ...mapMutations({
            setManufacturersModels: "manufacturers/setManufacturersModels",
        }),

        saveCars() {
            let data = {
                manufacturer_id: this.manufacturer,
                manufacturer_model_id: this.manufacturerModel,
            };

            this.saveFavoriteManufacturers(data)
                .then((resp) => {
                    this.manufacturer = null;
                    this.manufacturerModel = null;
                    this.$awn.success(resp.message);
                    this.errors = {};
                    this.getFavoriteManufacturers();
                })
                .catch((error) => {
                    this.$awn.alert(error.message);
                    this.errors = error.errors;
                });
        },

        manufacturersModels() {
            if (!this.manufacturer) {
                this.setManufacturersModels([]);
                this.manufacturerModel = null;
                return;
            }
            this.getManufacturersModels({ manufacturer: this.manufacturer });
        },
    },
};
</script>
