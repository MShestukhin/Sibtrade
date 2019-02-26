<template>
    <v-layout align-content-center justify-center column>
        <v-container>
            <v-chip color="orange" text-color="white"><h1>{{ title }}</h1></v-chip>

            <v-carousel hide-delimiters :interval="8000" height="600">
                <v-carousel-item
                        v-for="(item,index) in items"
                        :key="index"
                        :src="imgPathG+imgPath+'/'+item"
                >
                </v-carousel-item>
            </v-carousel>

            <v-card-text v-html="text">
            </v-card-text>

            <v-card-actions>
                <v-spacer></v-spacer>
                <v-icon
                        large
                        @click=""
                >
                    mdi-chevron-right
                </v-icon>
            </v-card-actions>
        </v-container>
    </v-layout>
</template>

<script>
    import axios from 'axios'

    export default {
        name: "Project",
        props: ['id'],
        data() {
            return {
                imgPathG: location.protocol + "//" + location.host+"/app/projects/",
                project: {},
                items:[],
                title: '',
                id: this.id,
                imgPath: '',
                text: ''
            }
        },
        created() {
            axios.post('/app/getProjects.php',
                {
                    id: this.id
                })
                .then(response => {
                    this.project=JSON.parse(response.data);
                    this.items=this.project[4].items;
                    this.text = this.project.dsc;
                    this.title = this.project.title;
                    this.imgPath = this.project.img;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
    }
</script>

<style scoped>

</style>