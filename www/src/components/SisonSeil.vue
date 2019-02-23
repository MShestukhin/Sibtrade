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
                    <h3 class="display-3">Сезонная распродажа фитингов</h3>
                    <span class="grey--text">Нажмите и ознакомтесь с прайс-листом</span><br>
                </v-flex>
            </v-layout>
        </v-container>
    </v-jumbotron>
</template>

<script>
    export default {
        name: "SisonSeil",
        data: () => ({
            gradient: 'to top right, rgba(166, 61, 61, .7), rgba(25,32,72, .7)'
        })
    }
</script>

<style scoped>

</style>