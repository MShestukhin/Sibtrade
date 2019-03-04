<template>
    <div class="container">
        <h1>
            Google Map
        </h1>

        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-success" data-location="Location 1" @click="myclick('Location 1')" >Location 1</a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-success" data-location="Location 2" @click="myclick('Location 2')">Location 2</a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-success" data-location="Location 3" @click="myclick('Location 3')">Location 3</a>
            </li>
        </ul>

        <gmap-map
                v-bind="options"
                id="map"
        >
        </gmap-map>
    </div>
</template>

<script>
    import { gmapApi } from 'vue2-google-maps';

    export default {
        name: "GoogleMap",
        data() {
            return {
                options: {
                    zoom: 10,
                    center: {
                        lat: 39.9995601,
                        lng: -75.1395161
                    },
                    mapTypeId: 'roadmap'
                }
            };
        },
        computed: {
            google: gmapApi
        },
        methods: {
            myclick() {
                console.log(1111111111111111)
            }
        }
    };
</script>

<style lang="scss" scoped>
    #map {
        height: 500px;
        width: 100%;
        margin: 0 auto;
    }
</style>
