<template>
    <v-container
            fluid
            grid-list-lg
    >
    <v-layout row wrap>
        <v-flex xs12 sm6 offset-sm3>
        <v-toolbar color="orange" dark>
        <v-toolbar-title>Техническая информация</v-toolbar-title>
        <v-spacer></v-spacer>
    </v-toolbar>
        </v-flex>

        <v-flex xs12 sm6 offset-sm3 v-for="(item,index) in items">
            <v-card >
                <v-card-title primary-title>
                    <div>
                        <h3 class="headline mb-0">{{item.title}}</h3>
                    </div>
                </v-card-title>

                <v-card-actions>
                    <v-btn flat color="orange" @click="route(item.link)">Смотреть</v-btn>
                </v-card-actions>
            </v-card>
        </v-flex>
    </v-layout>
    </v-container>
</template>

<script>
    export default {
        name: "Designer",
        data: () => ({
            items: [
                {
                    title: 'СП-40-102-2000 - Свод правил для ПРОЕКТИРОВАНИЯ И МОНТАЖА ТРУБОПРОВОДОВ СИСТЕМ ВОДОСНАБЖЕНИЯ И КАНАЛИЗАЦИИ ИЗ ПОЛИМЕРНЫХ МАТЕРИАЛОВ',
                    link: 'http://tehstroi.ru/images/price/SP_40-102-2000_Proektirovanie_i_montazh_truboprovodov_sistem_vodosnabzheniya_i_kanalizatcii1.pdf'
                },
                {
                    title: 'Альбом проектных решений по внешним сетям безнапорной канализации из гофрированных труб "Техстрой"',
                    link: 'http://tehstroi.ru/images/price/ALBOM_PROEKTNIH_REShENIJ_19.07.171.pdf'
                },
                {
                    title: 'Транзитная норма загрузки. Представлены точные сведения о вместимости автотранспорта КАМАЗ с расчетом диаметра и метража ПЭ труб.',
                    link: 'http://tehstroi.ru/images/price/norma_otgruzki.xls'
                },
                {
                    title: 'Химическая стойкость полиэтиленовых труб. В табличной форме можно скачать сведения о химической стойкости полимерных труб из различных материалов.',
                    link: 'http://tehstroi.ru/images/price/HimPE.xls'
                },
                {
                    title: 'СП 42-103-2003 Свод правил по проектированию и строительству газопроводов.',
                    link: 'http://tehstroi.ru/images/price/SP_42-103-2003__Proektirovanie_i_stroitelstvo_gazoprovodov1.pdf'
                },
                {
                    title: 'Техническое описание Альбом проектных решений из спиральновитой трубы ТЕХСТРОЙ СВТ',
                    link: 'http://tehstroi.ru/images/price/Albom-TEHSTROJ-SVT2.pdf'
                },
                {
                    title: 'Каталог по колодцам "Техстрой"',
                    link: 'http://tehstroi.ru/images/albom_proektnih_reshenij_po_kolodtcam_s_podpisyu_Tehstroj.pdf'
                },
                {
                    title: 'Техническое описание труб с защитным покрытием (оболочкой) Техстрой PROSAFE',
                    link: 'http://tehstroi.ru/images/price/Opisanie_trub_Tehstroj_PROSAFE_zashitnim_pokritiem_obolochkoj1.pdf'
                },
                {
                    title: 'Техническое описание труб "ТЕХСТРОЙ TR" из полиэтилена повышенной теплостойкости PE-RT тип II',
                    link: 'http://tehstroi.ru/images/Teh_opisanie_po_PE_RT1.pdf'
                }
            ]
        }),
        methods: {
            route(link){
                console.log('jjj');
                window.open(link);
            }
        }
    }
</script>

<style scoped>

</style>