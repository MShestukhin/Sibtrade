<template>
    <v-carousel hide-delimiters :interval="8000" height="150">
        <v-carousel-item
        >
            <v-layout row wrap>
            <v-flex xs2>
                <v-img
                        src="http://ukc.izhitsa.org/assets/templates/izhitsa/slides/28042753.jpg"
                        height="150px"
                ></v-img>
            </v-flex>

                <v-flex xs2>
                    <v-img
                            src="http://news.vsemetri.com/files/posts/2016/10/25/580ede5483c9c.jpg"
                            height="150px"
                    ></v-img>
                </v-flex>
                <v-flex xs2>
                    <v-img
                            src="http://www.inalytica.com/upload/medialibrary/7c2/7c24b1db6b52ee58f7f001308865bfa3.jpg"
                            height="150px"
                    ></v-img>
                </v-flex>

                <v-flex xs2>
                    <v-img
                            src="http://is3.mzstatic.com/image/thumb/Purple7/v4/4d/51/eb/4d51eb27-139c-6c43-e3db-3d0419b005ed/source/512x512bb.jpg"
                            height="150px"
                    ></v-img>
                </v-flex>
                <v-flex xs2>
                    <v-img
                            src="http://freevector.co/wp-content/uploads/2009/04/friatec.png"
                            height="150px"
                    ></v-img>
                </v-flex>
                <v-flex xs2>
                    <v-img
                            src="https://static.tildacdn.com/tild3930-3934-4632-b835-643239316263/1494495092_spezstroi.jpg"
                            height="150px"
                    ></v-img>
                </v-flex>
            </v-layout>
        </v-carousel-item>
        <v-carousel-item
        >
            <v-layout row wrap>
                <v-flex xs2>
                    <v-img
                            src="https://fs01.infourok.ru/images/doc/9/11741/img6.jpg"
                            height="150px"
                    ></v-img>
                </v-flex>

                <v-flex xs2>
                    <v-img
                            src="http://www.companieshistory.com/wp-content/uploads/2013/07/LyondellBasell-Industries.png"
                            height="140px"
                    ></v-img>
                </v-flex>
                <v-flex xs2>
                    <v-img
                            src="http://www.htecheng.com/wp-content/uploads/2015/12/battenfeld-cincinnat1i.jpg"
                            height="120px"
                    ></v-img>
                </v-flex>

                <v-flex xs2>
                    <v-img
                            src="https://goodlikes.ru/wp-content/uploads/2018/09/zascopy-gul.jpg"
                            height="150px"
                    ></v-img>
                </v-flex>
                <v-flex xs2>
                    <v-img
                            src="http://bliss-servis.ru/images/1696622104_karty-na-skidku-topliva.png"
                            height="150px"
                    ></v-img>
                </v-flex>
                <v-flex xs2>
                    <v-img
                            src="https://img.favcars.com/kmw/logotypes/photos_kmw_logotypes__1_800x600.jpg"
                            height="140px"
                    ></v-img>
                </v-flex>
            </v-layout>
        </v-carousel-item>
    </v-carousel>
</template>

<script>
    export default {
        name: "UsTrusted",
        data(){
            return {
                item : 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg'
            }
        }
    }
</script>

<style scoped>

</style>