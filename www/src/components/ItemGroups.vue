<template>
    <v-layout row wrap>
        <v-flex xs2>
            <v-card>
                <v-img
                        src="https://sdelanounas.ru/i/d/3/d/d3d3LnNkZWxhbm91bmFzLnJ1L3VwbG9hZHMvNi81LzY1NjE0MjQzNzE4NjVfb3JpZy5qcGVnP19faWQ9NTcwMzE=.jpg"
                        height="150px"
                        class="orange--text"
                >
                    <v-card-title primary-title>
                    <div>
                        <div class="headline">Заводы по производству труб</div>
                    </div>
                    </v-card-title>
                </v-img>
            </v-card>
        </v-flex>
        <v-flex xs2>
            <v-card>
                <v-img
                        src="http://optimapipe.ru/images/w689-h345/20180627/3a0456431aaac0aec313168ebc606ed7.jpg"
                        height="150px"
                        class="orange--text"
                >
                    <v-card-title primary-title>
                    <div>
                        <div class="headline">Многослойные трубы МультиТех</div>
                    </div>
                    </v-card-title>
                </v-img>
            </v-card>
        </v-flex>
        <v-flex xs2>
            <v-card>
                <v-img
                        src="https://www.calc.ru/imgs/articles3/15/04/68857256fef30289d393.76730355.jpg"
                        height="150px"
                        class="orange--text"
                >
                    <v-card-title primary-title>
                    <div>
                        <div class="headline">Гофрированная труба</div>
                    </div>
                    </v-card-title>
                </v-img>
            </v-card>
        </v-flex>
        <v-flex xs2>
            <v-card>
                <v-img
                        src="http://optimapipe.ru/images/w689-h345/20150605/dd5d954f27e4a37754bbb83a4fb3a0e5.JPG"
                        height="150px"
                        class="orange--text"
                >
                    <v-card-title primary-title>
                    <div>
                        <div class="headline">ТРУБЫ PROSAFE</div>
                    </div>
                    </v-card-title>
                </v-img>
            </v-card>
        </v-flex>
        <v-flex xs2>
            <v-card>
                <v-img
                        src="https://www.germesgroup.com/Product/IMG_3694.jpg"
                        height="150px"
                        class="orange--text"
                >
                    <v-card-title primary-title>
                    <div>
                        <div class="headline">Спиральновитые трубы</div>
                    </div>
                    </v-card-title>
                </v-img>
            </v-card>
        </v-flex>
        <v-flex xs2>
            <v-card>
                <v-img
                        src="http://innoformula.ru/thumb/0tjZOuKzWC7oVxIqSSIILw/580r450/1620328/fitingi.jpg"
                        height="150px"
                        class="orange--text"
                >
                    <v-card-title primary-title>
                    <div>
                        <div class="headline">Фитинги и запорная арматура</div>
                    </div>
                    </v-card-title>
                </v-img>
            </v-card>
        </v-flex>
    </v-layout>

</template>


<script>
    export default {
        name: "ItemGroups",
        data: () => ({
            length: 3,
            onboarding: 0
        }),

        methods: {
            next () {
                this.onboarding = this.onboarding + 1 === length
                    ? 0
                    : this.onboarding + 1
            },
            prev () {
                this.onboarding = this.onboarding - 1 < 0
                    ? this.length - 1
                    : this.onboarding - 1
            }
        }

    }
</script>

<style scoped>

</style>