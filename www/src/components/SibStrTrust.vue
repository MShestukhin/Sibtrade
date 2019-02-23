
<template>
    <v-jumbotron
            height="150px"
            :gradient="gradient"
            dark
            src="https://cdn.vuetifyjs.com/images/parallax/material2.jpg"
    >
        <v-container fill-height :fill-height="true">
            <v-layout align-center>
                <v-flex text-xs-center>
                    <h3 class="display-1">Трубы СИБСТРОЙ - надежность инженерных сетей!</h3>
                </v-flex>
            </v-layout>
        </v-container>
    </v-jumbotron>
</template>

<script>
    export default {
        name: "SibStrTrust",
        data: () => ({
            gradient: 'to top right, rgba(12, 23, 240, .5), rgba(42, 31, 196, .7)'
        })
    }
</script>

<style scoped>

</style>