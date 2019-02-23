<template>
        <!--<v-layout row wrap>-->
                    <form
                            ref="form">
                        <v-card class="elevation-12">
                            <v-flex align-center justify-center>
                            <v-toolbar dark color="orange">
                                <!--<v-toolbar-title>-->
                                    <h3>Оставьте свои контакты и мы Вам перезвоним!</h3>
                                <!--</v-toolbar-title>-->
                            </v-toolbar>

                        <v-text-field
                                v-model="name"
                                v-validate="'required'"
                                label="Имя"
                                :error-messages="nameErrors"
                                box
                                required
                                @input="$v.name.$touch()"
                                @blur="$v.name.$touch()"
                        ></v-text-field>
                        <!--mask="phone"-->
                        <v-text-field
                                v-model="phone"
                                mask="phone"
                                :error-messages="phoneErrors"
                                prefix=" +7 "
                                box
                                required
                                label="Телефон"
                                @input="$v.phone.$touch()"
                                @blur="$v.phone.$touch()"
                        ></v-text-field>

                        <v-btn :disabled="(this.$v.name.$model=='' || this.$v.phone.$model=='')" @click="submit">Отправить</v-btn>
                        <v-btn @click="clear">Очистить</v-btn>
                            </v-flex>
                        </v-card>
                    </form>
            <!--</v-flex>-->
        <!--</v-layout>-->
</template>

<script>
    import {validationMixin} from 'vuelidate'
    import {required} from 'vuelidate/lib/validators'
    import axios from 'axios'
    import Vue from 'vue'

    export default {
        mixins: [validationMixin],
        name: "SendForm",
        props: ['snackbar'],

        validations: {
            name: {required},
            phone: {required},
            select: {required}
        },
        data: () => ({
            valid: true,
            name: '',
            phone: '',
            select: null,
            checkbox: false
        }),
        computed: {
            nameErrors () {
                const errors = []
                if (!this.$v.name.$dirty) return errors
                !this.$v.name.required && errors.push('Введите пожалуйста имя')
                return errors
            },
            phoneErrors () {
                const errors = []
                if (!this.$v.name.$dirty) return errors
                !this.$v.name.required && errors.push('Введите пожалуйста телефон')
                return errors
            },
        },

        methods: {
            submit() {
                this.$v.$touch();
                const formData = new FormData();
                formData.append("name", this.$v.name.$model);
                self=this;
                if(this.$v.name.$model!='' && this.$v.phone.$model!='') {
                    // axios.get('http://localhost:4444/',
                    axios.post('/app/send.php',
                        {
                            name: this.$v.name.$model,
                            phone: this.$v.phone.$model
                        })
                        .then(function (response) {
                            self.$v.$reset();
                            self.name = '';
                            self.phone = '';
                            self.$emit('snackbar_show');
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
            },
            clear() {
                this.$v.$reset()
                this.name = ''
                this.phone = ''
                this.select = null
                this.checkbox = false
            }
        }
    }
</script>

<style scoped>

</style>