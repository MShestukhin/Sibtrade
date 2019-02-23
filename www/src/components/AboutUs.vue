<template>
    <div class="text-xs-center">
        <v-bottom-sheet v-model="sheet">
            <v-btn
                    slot="activator"
                    color="purple"
                    dark
            >
                Наши контакты
            </v-btn>

            <v-list>
                <v-subheader>Контанкты</v-subheader>
                <v-list-tile
                        v-for="tile in tiles"
                        :key="tile.title"
                        @click="sheet = false"
                >
                    <!--<v-list-tile-avatar>-->
                        <!--<v-avatar size="32px" tile>-->
                            <!--<img-->
                                    <!--:src="`https://cdn.vuetifyjs.com/images/bottom-sheets/${tile.img}`"-->
                                    <!--:alt="tile.title"-->
                            <!--&gt;-->
                        <!--</v-avatar>-->
                    <!--</v-list-tile-avatar>-->
                    <v-list-tile-title>{{ tile.title }}</v-list-tile-title>
                </v-list-tile>
            </v-list>
        </v-bottom-sheet>
    </div>
</template>
<script>
    export default {
        name: "AboutUs",
        data: () => ({
            sheet: false,
            tiles: [
                { img: 'keep.png', title: 'Адрес: 664009 г.Иркутск, ул.Красноярская, 11А, оф.409, бизнес-центр "777" адрес склада 664528, г.Иркутск, ул.Фролова, 1/3' },
                { img: 'inbox.png', title: 'Телефон: +73952455060' },
                { img: 'hangouts.png', title: 'Mail: dir@sibtrade.info' },
                { img: 'messenger.png', title: 'Вконтакте: https://vk.com/club173262752' }
            ]
        })
    }
</script>

<style scoped>

</style>