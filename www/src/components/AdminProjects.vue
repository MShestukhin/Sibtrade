<template>
    <v-card>
        <v-btn
                absolute
                dark
                fab
                top
                right
                color="orange"
                @click="back(-1)"
        >
            <v-icon>add</v-icon>
        </v-btn>
        <v-toolbar color="gray" dark>
            <v-toolbar-title class="orange--text">Проекты</v-toolbar-title>
        </v-toolbar>
        <v-layout row>
            <v-flex xs6>
                <v-container>
                    <v-img
                            :src="imgGros"
                            aspect-ratio="2.75"
                    ></v-img>
                    <v-card-title primary-title>
                        <div>
                            <h3 class="headline mb-0">{{mainProject.title}}</h3>
                        </div>
                    </v-card-title>

                    <v-card-actions>
                        <v-btn flat color="orange" @click="back(mainProject.id)">Читать дальше</v-btn>
                    </v-card-actions>
                </v-container>
            </v-flex>
            <v-flex xs6>

                <v-list three-line>
                    <template v-for="(item, index) in projects">
                        <v-subheader
                                v-if="item.header"
                                :key="item.header"
                        >
                            {{ item.header }}
                        </v-subheader>

                        <v-divider
                                v-else-if="item.divider"
                                :inset="item.inset"
                                :key="index"
                        ></v-divider>

                        <v-list-tile
                                v-else
                                :key="item.title"
                                avatar
                                @click="back(item.id)"
                        >
                            <v-list-tile-avatar>
                                <img :src="item.avatar">
                            </v-list-tile-avatar>

                            <v-list-tile-content>
                                <!--<v-list-tile-title v-html="item.title"></v-list-tile-title>-->
                                <v-list-tile-sub-title v-html="item.title"></v-list-tile-sub-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </template>
                </v-list>
            </v-flex>

        </v-layout>
    </v-card>
</template>

<script>
    import axios from 'axios'
    var fs = require('fs');
    export default {
        name: "adminProjects",
        data: function () {
            return {
                mainProject:{},
                card_text: 'Участие в строительстве и поставке материалов для рудника Гросс',
                imgGros: location.protocol + "//" + location.host + '/static/img/LA.jpg',
                link:'p_Gross',
                projects:[],
                dsc: 'Новый золотодобывающий рудник «Гросс» в Якутии, запуск которого намечен на вторую половину 2018 года, обеспечил в 2018 году около 800 рабочих мест и более 900 — на весь период освоения нового месторождения, а это порядка 17 лет. К строительству рудника «Гросс» приступили в начале 2016 года. В ходе двухлетнего периода строительства предприятие создало более 300 временных рабочих мест. На данный момент число постоянных рабочих, обеспечивающих операционную деятельность «Гросса», составило 403 человека. Еще столько же будут трудоустроены на рудник до конца этого года. Таким образом, общая численность персонала на «Гроссе» составит более 800 человек, из которых 171 человек (21%) – инженерно-технические работники и 636 (79%) – рабочие. Процессом укомплектования кадрами занимаются специалисты службы персонала «Нерюнгри-Металлик» и компании NordgoldВ строительство нового рудника вложено около 250 млн долларов США.\n' +
                '\n' +
                'Реализовано, смонтировано и запущено в эксплуатацию более 11км трубопроводов водоснабжения и канализации из предизолированных труб в ППУ диаметрами от 50 до 630мм.\n',
            }
        },
        created() {
            axios.post('/app/getProjects.php')
                .then(response=>{
                    console.log(response);
                    for(var i=0; i<response.data.length-1;i++){
                        this.projects.push(JSON.parse(response.data[i]));
                    }
                    this.mainProject=JSON.parse(response.data[response.data.length-1]);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        methods: {
            back(index) {
                this.$vuetify.goTo(0);
                this.$router.push({name: 'edit', params: {id: index}});
            }
        }
    }
</script>

<style scoped>

</style>