    <template>
        <v-container fluid>
        <v-card
                class="mx-auto"
        >
            <v-card
                    dark
                    flat
            >

                <v-img
                        :src="img"
                        gradient="to top, rgba(0,0,0,.44), rgba(0,0,0,.44)"
                >
                    <v-container fill-height>
                        <v-layout align-end row>
                            <!--<strong class="display-4 font-weight-regular mr-4">8</strong>-->
                            <!--<v-layout column justify-end>-->
                            <!--<v-list-tile-content class="align-end">Мы — официальный дилер одного из ведущих производителей полимерных труб «Техстрой» г. Казань на территории Иркутска и Иркутской области. </v-list-tile-content>-->
                            <!--<v-layout pt5>-->
                            <v-flex>

                            </v-flex>
                                <v-flex xs8>
                                    <div class="headline font-weight-light" style="color:orange">Мы — официальный дилер одного из ведущих производителей полимерных труб «Техстрой» г. Казань на территории Иркутска и Иркутской области. </div>
                                </v-flex>
                            <!--</v-layout>-->
                            <!--<div class="text-uppercase font-weight-light">February 2015</div>-->
                            <!--</v-layout>-->
                        </v-layout>
                    </v-container>
                </v-img>
            </v-card>
            <v-card-text class="py-0">
                <v-timeline
                        align-top
                        dense
                >
                    <v-timeline-item
                            color="orange"
                            small
                    >
                        <v-layout pt-3>
                            <v-flex xs3>
                                <strong>Вся продукция сертифицирована и соответствует требованиям нормативных документов.</strong>
                            </v-flex>
                            <v-flex>

                            </v-flex>
                            <v-flex xs8>
                                <div class="caption"> <v-list-tile-content ><h3 style="color:orange">Наш ассортимент</h3></v-list-tile-content>
                                    <v-list-tile-content ><h3>полиэтиленовые трубы для водо-, тепло- и газоснабжения диаметром до 1600 мм;</h3></v-list-tile-content>
                                    <v-list-tile-content ><h3>трубы для напорной и безнапорной канализации;</h3></v-list-tile-content>
                                    <v-list-tile-content ><h3>многослойные трубы с защитной оболочкой PROSAFE;</h3></v-list-tile-content>
                                    <v-list-tile-content ><h3>трубы из полиэтилена, устойчивого к механическим нагрузкам;</h3></v-list-tile-content>
                                    <v-list-tile-content ><h3>трубы, устойчивые к высоким температурам до +110 градусов;</h3></v-list-tile-content>
                                    <v-list-tile-content ><h3>фитинги.</h3></v-list-tile-content>
                                </div>
                            </v-flex>
                        </v-layout>
                    </v-timeline-item>

                    <v-timeline-item
                            color="orange"
                            small
                    >
                        <v-layout wrap pt-3>
                            <v-flex xs3>
                                <v-avatar>
                                    <v-img
                                            :src="img1"
                                    ></v-img>
                                </v-avatar>
                                <v-avatar>

                                    <v-img
                                            :src="img2"
                                    ></v-img>
                                </v-avatar>
                                <v-avatar>
                                    <v-img
                                            :src="img3"
                                    ></v-img>
                                </v-avatar>
                            </v-flex>
                            <v-flex>

                            </v-flex>
                            <v-flex xs8>
                                <strong>По уровню оборудования и технической оснащенности, согласно оценкам зарубежных экспертов, мы являемся лидером отрасли в РФ. Производство продукции осуществляется одновременно на 4 заводах, где задействовано 20 технологических линий высокой производительности. </strong>
                                <!--<div class="caption mb-2">Hangouts</div>-->
                            </v-flex>
                        </v-layout>
                    </v-timeline-item>

                    <v-timeline-item
                            color="orange"
                            small
                    >
                        <v-layout pt-3>
                            <v-flex xs3>
                                <v-avatar>
                                    <v-img
                                            :src="img4"
                                    ></v-img>
                                </v-avatar>
                                <v-avatar>

                                    <v-img
                                            :src="img5"
                                    ></v-img>
                                </v-avatar>
                            </v-flex>
                            <v-flex>

                            </v-flex>
                            <v-flex xs8>
                                <strong>
                                    Производство изделий постоянно контролируется специальной службой качественного контроля и проходит обязательную проверку в аттестованной лаборатории на современном технологическом и испытательном оборудовании. Каждая партия проверяется на прочность, поведение при разрыве и другие показатели.                                </strong>
                                <!--<div class="caption mb-2">Hangouts</div>-->
                            </v-flex>
                        </v-layout>
                    </v-timeline-item>

                    <v-timeline-item
                            color="red"
                            small
                    >
                        <v-layout pt-3>
                            <v-flex>
                                <strong>Система скидок для постоянных клиентов! </strong>
                                <div class="caption">Сопровождение масштабных проектов: выезд и консультации по монтажу труб на объекте.</div>
                            </v-flex>
                        </v-layout>
                    </v-timeline-item>
                </v-timeline>
            </v-card-text>
        </v-card>
        </v-container>
    </template>

<script>
    export default {
        name: "Component",
        data () {
            return {
                img: location.protocol + "//" + location.host + '/static/img/SibTradeLogo.jpg',
                img1: location.protocol + "//" + location.host + '/static/img/MT.jpg',
                img2: location.protocol + "//" + location.host + '/static/img/SibImg2.jpg',
                img3: location.protocol + "//" + location.host + '/static/img/SibImg3.jpg',
                img4: location.protocol + "//" + location.host + '/static/img/SibImg4.jpg',
                img5: location.protocol + "//" + location.host + '/static/img/SibImg5.jpg',
                card_text: 'Lorem ipsum dolor sit amet, brute iriure accusata ne mea. Eos suavitate referrentur ad, te duo agam libris qualisque, utroque quaestio accommodare no qui. Et percipit laboramus usu, no invidunt verterem nominati mel. Dolorem ancillae an mei, ut putant invenire splendide mel, ea nec propriae adipisci. Ignota salutandi accusamus in sed, et per malis fuisset, qui id ludus appareat.'
            }
        }
    }
</script>

<style scoped>

</style>