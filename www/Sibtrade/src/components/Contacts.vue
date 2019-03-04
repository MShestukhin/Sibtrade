<template>
    <v-component>
    <v-layout row>
        <v-flex xs12 sm8 offset-sm2>
            <v-card>
                <v-img
                        :src="img"
                        height="500px"
                >
                    <v-layout
                            column
                            fill-height
                    >
                        <v-card-title>
                            <v-spacer></v-spacer>

                        </v-card-title>

                        <v-spacer></v-spacer>

                        <v-card-title class="white--text pl-5 pt-5">
                            <div class="display-1 pl-5 pt-5">Контакты</div>
                        </v-card-title>
                    </v-layout>
                </v-img>

                <v-list two-line>
                    <v-list-tile @click="">
                        <v-list-tile-action>
                            <v-icon color="indigo">phone</v-icon>
                        </v-list-tile-action>

                        <v-list-tile-content>
                            <v-list-tile-title>+7 (3952) 45-50-60</v-list-tile-title>
                            <v-list-tile-sub-title>Телефон</v-list-tile-sub-title>
                        </v-list-tile-content>

                        <v-list-tile-action>
                            <v-icon>phone</v-icon>
                        </v-list-tile-action>
                    </v-list-tile>

                    <!--<v-list-tile @click="">-->
                        <!--<v-list-tile-action></v-list-tile-action>-->

                        <!--<v-list-tile-content>-->
                            <!--<v-list-tile-title>(323) 555-6789</v-list-tile-title>-->
                            <!--<v-list-tile-sub-title>Work</v-list-tile-sub-title>-->
                        <!--</v-list-tile-content>-->

                        <!--<v-list-tile-action>-->
                            <!--<v-icon>chat</v-icon>-->
                        <!--</v-list-tile-action>-->
                    <!--</v-list-tile>-->

                    <v-divider inset></v-divider>

                    <v-list-tile @click="">
                        <v-list-tile-action>
                            <v-icon color="indigo">mail</v-icon>
                        </v-list-tile-action>

                        <v-list-tile-content>
                            <v-list-tile-title>dir@sibtrade.info</v-list-tile-title>
                            <v-list-tile-sub-title>Mail</v-list-tile-sub-title>
                        </v-list-tile-content>
                        <v-list-tile-action>
                        <v-icon>chat</v-icon>
                        </v-list-tile-action>
                    </v-list-tile>

                    <!--<v-list-tile @click="">-->
                        <!--<v-list-tile-action></v-list-tile-action>-->

                        <!--<v-list-tile-content>-->
                            <!--<v-list-tile-title>ali_connors@example.com</v-list-tile-title>-->
                            <!--<v-list-tile-sub-title>Work</v-list-tile-sub-title>-->
                        <!--</v-list-tile-content>-->
                    <!--</v-list-tile>-->

                    <v-divider inset></v-divider>

                    <v-list-tile @click="">
                        <v-list-tile-action>
                            <v-icon color="indigo">location_on</v-icon>
                        </v-list-tile-action>

                        <v-list-tile-content>
                            <v-list-tile-title>664009 г.Иркутск, ул.Красноярская, 11А, оф.409, бизнес-центр "777"</v-list-tile-title>
                            <v-list-tile-sub-title>адрес склада 664528, г.Иркутск, ул.Фролова, 1/3</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-card>
        </v-flex>
    </v-layout>
    </v-component>
</template>

<script>
    export default {
        name: "Contacts",
        data: function(){
            return {
                img: location.protocol + "//" + location.host + '/static/img/contacts.jpg'
            }
        },
    }
</script>

<style scoped>

</style>