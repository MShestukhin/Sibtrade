
<template>
    <!--<v-layout row>-->
        <!--<v-flex xs12 sm6>-->
            <v-card>
                <v-toolbar color="gray" dark>
                    <v-toolbar-title class="orange--text">Новости</v-toolbar-title>
                </v-toolbar>
                <v-list expand>
                    <template v-for="(item, index) in news">
                        <!--<v-list-tile-->
                                <!--:key="item.title"-->
                                <!--avatar-->
                                <!--ripple-->
                                <!--@click="toggle(index)"-->
                        <!--&gt;-->
                        <v-list-tile-content>
                            <!--<v-btn><</v-btn>-->
                            <v-dialog v-model="dialog" width="600px">
                                <v-list-tile slot="activator" @click="dialog = true; editorData=item.text; id=item.id">
                                    <v-list-tile-content>
                                        <!--<v-list-tile-sub-title class="text&#45;&#45;primary">{{ item.headline }}</v-list-tile-sub-title>-->
                                        <!--<v-card max-width="300px">-->
                                            <v-list-tile-sub-title v-html="item.text"></v-list-tile-sub-title>
                                        <!--</v-card>-->
                                    </v-list-tile-content>
                                    <v-divider
                                            v-if="index + 1 < items.length"
                                            :key="index"
                                    ></v-divider>
                                </v-list-tile>
                                <v-card>
                                    <v-container grid-list-md text-xs-center>
                                        <v-layout row wrap>
                                                <v-card v-html="editorData"></v-card>
                                        </v-layout>
                                    </v-container>
                                </v-card>

                            </v-dialog>
                            <v-divider
                                    v-if="index + 1 < items.length"
                                    :key="index"
                            ></v-divider>
                        </v-list-tile-content>

                        <!--</v-list-tile>-->
                        <v-divider
                                v-if="index + 1 < items.length"
                                :key="index"
                        ></v-divider>
                    </template>
                </v-list>
            </v-card>
        <!--</v-flex>-->
    <!--</v-layout>-->
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    import axios from 'axios'
    export default {
        name: "News",
        data () {
            return {
                arr : null,
                selected: [2],
                dialog: false,
                news:[],
                editor: ClassicEditor,
                editorData: '',
                editorConfig: {
                    ckfinder: {
                        uploadUrl: location.protocol + "//" + location.host + '/static/'
                    }
                },
                items: [
                    {
                        action: '15 min',
                        headline: 'Brunch this weekend?',
                        title: '18 сентября 2018',
                        subtitle: "Социальный проект «Техстрой» помогает воспитанникам «Республиканского специализированного дома ребёнка»"
                    },
                    {
                        action: '2 hr',
                        headline: 'Summer BBQ',
                        title: '27 ноября 2018',
                        subtitle: "В Казани завершается реконструкция улицы Братьев Батталовых: использованы трубы PROSAFE от Техстрой"
                    },
                    {
                        action: '6 hr',
                        headline: 'Oui oui',
                        title: '26 ноября 2018',
                        subtitle: 'Продукция ООО «Техстрой» позволила улучшить дорогу в Мытищах'
                    },
                    {
                        action: '12 hr',
                        headline: 'Birthday gift',
                        title: '26 ноября 2018',
                        subtitle: 'ООО «Техстрой» получило почётную награду на Дне химика'
                    }
                ],
            }
        },
        created() {
            axios.post('/app/getNews.php')
                .then(response=>{
                    console.log(response);
                    for(var i=0; i<response.data.length;i++){
                        this.news.push(JSON.parse(response.data[i]));
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        methods: {
            saveNews(index, text){
                console.log(index);
                this.editorData='';
                self=this;
                axios.post('/app/saveNews.php',
                    {
                        index: index,
                        text: text
                    })
                    .then(function (response) {
                        self.editorData = '';
                        self.dialog = false;
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            deleteNews(id){
                axios.post('/app/deleteNews.php',
                    {
                        index: id
                    })
                    .then(function (response) {
                        self.editorData = '';
                        self.dialog = false;
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
}
</script>

<style>
    .ck-content { color : black; height: 500px; width: 400px;}
</style>