<template>
            <v-layout align-content-center justify-center column>
                <v-flex md12>
                    <carousels/>
                </v-flex>
                <!--<v-spacer/>-->
                <v-flex md12>
                    <v-container>
                        <v-layout d-flex fill-height>
                            <v-flex d-flex md4>
                                <!--<v-container fill-height>-->
                                <div v-if="currentRoute==adminPath">
                                    <v-card max-width="450px">
                                    <admin-news/>
                                    </v-card>
                                </div>
                                <div v-else>
                                    <v-card max-width="450px">
                                        <news/>
                                    </v-card>
                                </div>
                                    <!--<news/>-->
                                <!--</v-container>-->
                            </v-flex>
                            <v-flex md1>
                            </v-flex>
                            <v-flex d-flex md7>
                                <!--<projects/>-->
                                <div v-if="currentRoute==adminPath">
                                        <admin-projects/>
                                </div>
                                <div v-else>
                                        <projects/>
                                </div>
                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-flex>
                <!--<v-container>-->
                <!--&lt;!&ndash;<news/>&ndash;&gt;-->
                <!--</v-container>-->
                <v-flex xs10>
                    <v-container grid-list-md text-xs-center>
                        <this-sibstroy/>
                    </v-container>
                </v-flex>
                <v-flex xs10>
                    <v-container grid-list-md>
                        <about-us/>
                        <!--<v-layout align-center justify-center>-->
                        <v-flex d-flex md12>
                            <YundexMap/>
                        </v-flex>
                        <!--</v-layout>-->
                    </v-container>
                    <!--<my-footer/>-->

                </v-flex>
            </v-layout>
        <!--<v-footer app fixed>-->
        <!--<span>&copy; 2017</span>-->
        <!--</v-footer>-->
    </v-app>
</template>

<script>
    import Carousels from "./carousels";
    import ThisSibstroy from "./ThisSibstroy";
    import YundexMap from "./YundexMap";
    import ItemGroups from "./ItemGroups";
    import AboutUs from "./AboutUs";
    import Footer from "./Footer";
    import MyFooter from "./MyFooter";
    import News from "./News";
    import Projects from "./Projects";
    import AdminNews from "./AdminNews";
    import AdminProjects from "./AdminProjects";
    export default {
        components: {
            AdminProjects,
            AdminNews,
            Projects, News, MyFooter, Footer, AboutUs, ItemGroups, YundexMap, ThisSibstroy, Carousels},
        name: "Main",
        data: () => ({
            adminPath: location.protocol + "//" + location.host+"/#/admin",
            drawer: false,
            currentRoute: window.location,
            services: [
                {
                    name:"Водоснабжение",
                    icon: "invert_colors",
                    items: [
                        { title: 'Трубы из ПЭ 80, ПЭ 100, ПЭ 100+',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/gost_water.jpg'},
                        { title: 'МУЛЬТИКЛИН',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/Mcline_water.jpg'},
                        { title: 'МУЛЬТИПАЙП II, МУЛЬТИПАЙП II RC, МУЛЬТИПАЙП III',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/mpipe_water.jpg'},
                        { title: 'ПРОТЕКТ,\n' +
                            'ПРОТЕКТ 1075',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/protect_water.jpg'}
                    ]
                },
                {
                    name:"Водоотведение",
                    icon: "format_color_reset",
                    items: [
                        { title: 'Система трубопроводов из НПВХ',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/Npvh_Wp.jpg'},
                        { title: 'Система трубопроводов серии КОРСИС',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/Corsis_fam.jpg'},
                        { title: 'Система трубопроводов ПЕРФОКОР',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/fittings_1.jpg'},
                        { title: 'Система трубопроводов СПИРОЛАЙН',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/perfocore.jpg'},
                        { title: 'Система трубопроводов КОРСИС ПЛЮС',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/corsis_es.jpg'},
                        { title: 'Система трубопроводов КОРСИС АРМ',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/perfocore.jpg'}
                    ]
                },
                {
                    name:"Газораспределение",
                    icon: "local_gas_station",
                    items: [
                        { title: 'Трубы из ПЭ 80, ПЭ 100; ТУ и ГОСТ',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/gost_gas.jpg'},
                        { title: 'Трубы из ПЭ 80, ПЭ 100; ТУ',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/mpipe_gas.jpg'},
                        { title: 'ПРОТЕКТ,\n' +
                            'ПРОТЕКТ 1075',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/Protect_gas.jpg'},
                        { title: 'МУЛЬТИПАЙП II,\n' +
                            'МУЛЬТИПАЙП II RC,\n' +
                            'МУЛЬТИПАЙП III',
                            avatar: 'http://www.polyplastic.ru/upload/production/menu/fitingi_gaz.png'}
                    ]
                },
                {name:"Кабелезащита", icon: "offline_bolt"},
                {name:"Решение для промышленности",icon: "restore_from_trash"},
                {name:"Запорно-регулирующая арматура",icon: "sync"},
                {name:"Оборудование для сварки ПЭ труб",icon: "whatshot"},
            ]
        }),
        props: {
            source: String
        },
        methods: {
            back(v){
                console.log(v);
                // var pdf = 'https://vk.com/doc94640760_488211554?hash=8e237b1dad85b1fbde&dl=0ee5582c92f973ff1d';
                // window.open(pdf);
                //  this.$router.push({ path: 'post' });
            }
        }
    }
</script>
