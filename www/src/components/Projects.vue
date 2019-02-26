<template>
    <v-card>
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
                            <h3 class="headline mb-0">{{card_text}}</h3>
                        </div>
                    </v-card-title>

                    <v-card-actions>
                        <v-btn flat color="orange" @click="back(card_text, dsc, link)">Читать дальше</v-btn>
                    </v-card-actions>
                </v-container>
            </v-flex>
            <v-flex xs6>

                <v-list three-line>
                    <template v-for="(item, index) in items">
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
                                @click="back(item.title, item.dsc, item.link)"
                        >
                            <v-list-tile-avatar>
                                <img :src="item.avatar">
                            </v-list-tile-avatar>

                            <v-list-tile-content>
                                <!--<v-list-tile-title v-html="item.title"></v-list-tile-title>-->
                                <v-list-tile-sub-title v-html="item.subtitle"></v-list-tile-sub-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </template>
                </v-list>
            </v-flex>

        </v-layout>
    </v-card>
</template>

<script>
    var fs = require('fs');
    export default {
        name: "Projects",
        data: function () {
            return {
                card_text: 'Участие в строительстве и поставке материалов для рудника Гросс',
                imgGros: location.protocol + "//" + location.host + '/static/img/LA.jpg',
                link:'p_Gross',
                dsc: 'Новый золотодобывающий рудник «Гросс» в Якутии, запуск которого намечен на вторую половину 2018 года, обеспечил в 2018 году около 800 рабочих мест и более 900 — на весь период освоения нового месторождения, а это порядка 17 лет. К строительству рудника «Гросс» приступили в начале 2016 года. В ходе двухлетнего периода строительства предприятие создало более 300 временных рабочих мест. На данный момент число постоянных рабочих, обеспечивающих операционную деятельность «Гросса», составило 403 человека. Еще столько же будут трудоустроены на рудник до конца этого года. Таким образом, общая численность персонала на «Гроссе» составит более 800 человек, из которых 171 человек (21%) – инженерно-технические работники и 636 (79%) – рабочие. Процессом укомплектования кадрами занимаются специалисты службы персонала «Нерюнгри-Металлик» и компании NordgoldВ строительство нового рудника вложено около 250 млн долларов США.\n' +
                '\n' +
                'Реализовано, смонтировано и запущено в эксплуатацию более 11км трубопроводов водоснабжения и канализации из предизолированных труб в ППУ диаметрами от 50 до 630мм.\n',
                items: [
                    {
                        header: 'Сегодня'
                    },
                    {
                        avatar: location.protocol + "//" + location.host + '/static/img/RUD.jpg',
                        dsc: 'Строительство объекта «Ледовая арена» ведется в Свердловском районе города. Ген. подрядчик - ООО «СДС-Строй», компания из Кемерово. Инициатором строительства выступил губернатор Иркутской области Сергей Левченко. Идею поддержали на федеральном уровне, из федерального бюджета будет выделено 4,9 млрд рублей. Согласно проекту, в центре будут ледовая арена, конькобежные дорожки и трибуны для зрителей, предусмотрены два тренажерных зала, спортивный зал для игровых видов спорта, хореографический зал для фигуристов, беговой зал, конференц-зал, гостиница со SPA-центром и ряд других помещений. Ледовая арена будет трансформироваться в многофункциональную спортивную площадку для игры в волейбол, баскетбол, теннис, катания на роликовых коньках. Объект на 6 000 зрителей со стоимостью более 6 млрд рублей. Это будет новая веха в развитии всего иркутского спорта - без сомнения. На объекте запланировано проведение чемпионата мира по хоккею с мячом в марте 2020 года.\n' +
                        '\n' +
                        'Наша компания осуществила тоннелирование двух переходов под автомобильной дорогой диаметрами 1000мм с прокладкой в них трубопроводов диаметром 700мм.',
                        title: 'Новый Ледовый Дворец',
                        subtitle: "Строительство объекта \"Ледовая Арена\" в Иркутске",
                        link:'ledovaya_arena'
                    }
                    // {divider: true, inset: true},
                    // {
                    //     avatar: 'http://www.polyplastic.ru/upload/projects/2018/ekad_1.jpg',
                    //     title: 'Oui oui',
                    //     subtitle: "Строительство улиц № 1, № 3, № 7 для жилой застройки территории, ограниченной: коридор ВЛ- ул. 2-я Новосибирская – ЕКАД. Жилой район «Солнечный»"
                    // },
                ]
            }
        },
        created(){
            const testFolder = location.protocol + "//" + location.host + '/static/';
            var path = require('path');

            var getFiles = function (dir, files_){

                files_ = files_ || [];
                var files = fs.readdirSync(dir);
                for (var i in files){
                    var name = dir + '/' + files[i];
                    if (fs.statSync(name).isDirectory()){
                        getFiles(name, files_);
                    } else {
                        files_.push(name);
                    }
                }
                return files_;
            };

            console.log(getFiles(testFolder));
        },
        methods: {
            back(title, dsc, link) {
                this.$vuetify.goTo(0);
                if (dsc) {
                    console.log(title);
                    this.$router.push({name: 'post', params: {title: title, dsc, link: link}});
                    // this.$router.push({path: 'post/'+c, props: {src, c, dsc}});
                    // this.$router.push({path: '/post/'+c+'/'+dsc, component: More,  query: { plan: 'private' }});
                } else if (link) {
                    this.$router.push({name: link});
                } else {
                    this.$router.push({name: 'home'});
                }
            }
        }
    }
</script>

<style scoped>

</style>