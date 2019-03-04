<template>
    <v-layout align-content-center justify-center column>
    <!--<v-card>-->
        <!--<v-container grid-list-xs text-xs-center >-->
        <!--<v-flex xs12>-->
            <v-container>
            <!--<v-toolbar-->
                    <!--card-->
                    <!--color="orange"-->
                    <!--dark-->
                    <!--dense-->
            <!--&gt;-->
                <!--<v-toolbar-title class="body-4">-->
                    <v-chip color="orange" text-color="white"><h1>{{ title }}</h1></v-chip>
                <!--</v-toolbar-title>-->
            <!--</v-toolbar>-->
        <!--</v-container>-->
        <!--</v-flex>-->
            <!--<v-flex  xs12>-->
                <!--<v-layout d-flex>-->
                <v-container>
                <v-img
                        :src="img"
                        height="500px"
                >
                </v-img>
                </v-container>
                <!--</v-layout>-->
            <!--</v-flex>-->
            <!--</v-flex>-->
        <v-card-text v-html="checkDsc">
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
    <!--</v-card>-->

    </v-layout>
</template>
<script>
    // import Carousels from "./carousels";
    import Carousels from "./carousels";
    export default {
        name: "More",
        props: ['title','dsc','link'],
        components: {Carousels},
        data: function(){
            return {
                img: location.protocol + "//" + location.host + '/static/img/' + this.link + '.jpg'
            }
        },
        computed : {
            checkDsc: function () {
                this.img=location.protocol + "//" + location.host + '/static/img/' + this.link + '.jpg';
                if(this.dsc){
                    return this.dsc;
                }
                else{
                    this.$router.push({ name: 'home'});
                }
            }
        }
    }
</script>


<style scoped>

</style>