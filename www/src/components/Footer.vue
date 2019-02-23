<template>
        <v-footer
                height="auto"
                dark
        >
            <v-layout align-center justify-space-between column>
                <v-flex xs3>
                    <v-layout align-center justify-space-around row fill-height>
                    <!--<v-card-text class="white&#45;&#45;text pt-0">-->
                        <v-flex xs4>
                            <h3>Продукция</h3>
                            <ul class="nav menu">
                                <li class="item-442"><a href="/truby-dlya-vodi" >Трубы для воды </a></li><li class="item-443"><a href="/truby-dlya-gazasnabzhenia" >Трубы для газоснабжения</a></li><li class="item-445"><a href="/truby-dlya-kanalizacii" >Трубы для канализации</a></li><li class="item-441"><a href="http://tehstroi.ru/produktsiya" >Вся продукция</a></li></ul>
                        </v-flex>
                        <v-flex xs4>
                        <h3>Услуги</h3>
                        <ul class="nav menu">
                            <li class="item-132"><a href="/stroitelstvo-truboprovodov" title="Строительство магистральных трубопроводов" >Строительство инженерных сетей</a></li><li class="item-188"><a href="/arenda-oborudovaniya" title="Сварочные бригады с оборудованием" >Сварочные бригады с оборудованием</a></li><li class="item-189"><a href="/konsalting" title="Проектирование трубопроводов" >Проектирование</a></li></ul>
                        </v-flex>
                        <v-flex xs4>
                        <h3>Производство</h3>
                        <ul class="nav menu">
                            <li class="item-123"><a href="/proizvodstvo" title="Производство полиэтиленовых труб" >Производство</a></li><li class="item-124"><a href="/kontrol-kachestva" title="Контроль качества полимерных труб" >Контроль качества</a></li><li class="item-125"><a href="/proizvodstvenno-skladskaya-baza" title="Производственно-складская база" >Производственно-складская база</a></li><li class="item-126"><a href="/ekologicheskaya-politika" title="Экологическая политика" >Экологическая политика</a></li></ul>
                        </v-flex>
                        <v-flex xs4>
                        <h3>О компании</h3>
                        <ul class="nav menu">
                            <li class="item-446"><a href="/prais-listi" >Прайс-листы</a></li><li class="item-447"><a href="/nashi-nagradi" >Наши награды</a></li></ul>

                        <ul>
                            <li>
                                <span class="cityContent city-kazan-1"><a href="/kazan">Контакты</a></span>
                                <span class="cityContent city-moskva-1"></span>
                                <span class="cityContent city-novosibirsk-1"></span>
                                <span class="cityContent city-novokuznetsk-1"></span>
                                <span class="cityContent city-perm-1"></span>
                                <span class="cityContent city-nizhnij_novgorod-1"></span>
                                <span class="cityContent city-ufa-1"></span>
                                <span class="cityContent city-ekaterinburg-1"></span>
                                <span class="cityContent city-chelyabinsk-1"></span>
                                <span class="cityContent city-samara-1"></span>
                                <span class="cityContent city-rostov-1"></span>
                                <span class="cityContent city-orenburg-1"></span>
                                <span class="cityContent city-kirov-1"></span>
                                <span class="cityContent city-tyumen-1"></span>
                                <span class="cityContent city-cheboksary-1"></span>
                                <span class="cityContent city-izhevsk-1"></span>
                                <span class="cityContent city-other-1"></span>
                            </li>
                            <li>
                                <a href="/sitemap">Карта сайта</a>
                            </li>
                        </ul>
                        </v-flex>
                    <!--</v-card-text>-->
                    </v-layout>
                </v-flex>
                <v-flex xs3>
                    <v-card-text class="white--text">
                        &copy;2018 — <strong>Сибтрейд</strong>
                    </v-card-text>
                </v-flex>
            </v-layout>
            <!--</v-card>-->
        </v-footer>
</template>

<script>
    export default {
        name: "Footer",
        data: () => ({
            icons: [
                'fab fa-facebook',
                'fab fa-twitter',
                'fab fa-google-plus',
                'fab fa-linkedin',
                'fab fa-instagram'
            ]
        })
    }
</script>

<style scoped>

</style>