<template>

    <yandex-map
            :coords="[52.282701, 104.330454]"
            zoom="15"
            style="width: 600px; height: 600px;"
            :cluster-options="{
    1: {clusterDisableClickZoom: true}
  }"
            :behaviors="['ruler']"
            :controls="['trafficControl']"
            :placemarks="placemarks"
    map-type="map"
    @map-was-initialized="initHandler"
    >

    <ymap-marker
            marker-type="placemark"
            :coords="[52.282701, 104.330454]"
            hint-content="Hint content 1"
            :balloon="{header: 'header', body: 'body', footer: 'footer'}"
            :icon="{color: 'red'}"
            cluster-name="1"
    ></ymap-marker>

    <ymap-marker
            marker-type="placemark"
            :coords="[52.247796, 104.191440]"
            hint-content="Hint content 1"
            :balloon="{header: 'header', body: 'body', footer: 'footer'}"
            :icon="{color: 'blue'}"
            cluster-name="1"
    ></ymap-marker>

    <!--<ymap-marker-->
            <!--marker-type="circle"-->
            <!--:coords="[52.247796, 104.191440]"-->
            <!--circle-radius="1600"-->
            <!--hint-content="Hint content 1"-->
            <!--:marker-fill="{color: '#000000', opacity: 0.4}"-->
            <!--:marker-stroke="{color: '#ff0000', width: 5}"-->
            <!--:balloon="{header: 'header', body: 'body', footer: 'footer'}"-->
    <!--&gt;</ymap-marker>-->

    </yandex-map>
</template>

<script>
    export default {
        name: "YundexMap",
        data() {
            return {
                allowSpaces: false,
                placemarks: [
                    {
                        coords: [52.286387, 104.280660],
                        properties: {}, // define properties here
                        options: {}, // define options here
                        clusterName: "1",
                        callbacks: { click: function() {} }
                    }
                ]
            }
        }
    }
</script>

<style scoped>

</style>