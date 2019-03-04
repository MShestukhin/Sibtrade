<template>
<<<<<<< HEAD
    <v-toolbar :scroll-toolbar-off-screen="true">
        <v-toolbar-side></v-toolbar-side>
        <v-container grid-list-xs    text-xs-center>
=======
    <v-toolbar  :scroll-toolbar-off-screen="true">
        <v-layout align-center justify-center row >
            <v-toolbar-items class="hidden-sm-and-down">
                <v-toolbar-side-icon></v-toolbar-side-icon>
                <v-toolbar-title class="black--text">Title</v-toolbar-title>
            </v-toolbar-items>
            <v-spacer></v-spacer>
>>>>>>> 262e3c3016c611ac81f334b95edcb122d285dd92
        <v-toolbar-items class="hidden-sm-and-down">
            <v-btn
                    v-for="link in links"
                    :key="link"
                    color="black"
                    flat
                    round
            >
                {{ link }}
            </v-btn>
        </v-toolbar-items>
<<<<<<< HEAD
        </v-container>
        <!-- </v-layout> -->
=======
        </v-layout>
>>>>>>> 262e3c3016c611ac81f334b95edcb122d285dd92
    </v-toolbar>
</template>

<script>
    export default {
        name: "Header",
        data: () => ({
            links: [
                'Главная',
                'Продукция',
                'Услуги',
                'Производство',
                'Прайс-листы',
                'Пресс-центр',
                'О компании',
                'Контакты'
            ]
        })
    }
</script>

<style scoped>

</style>