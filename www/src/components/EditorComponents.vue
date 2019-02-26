<template>

    <v-container align-center>
        <v-form
        >
            <v-text-field
                    v-model="title"
                    label="Name"
                    required
            ></v-text-field>
            <v-text-field
                    v-model="imgPath"
                    label="Path"
                    required
            ></v-text-field>
            <!--<form action="upload.php" method="post" enctype="multipart/form-data">-->
                <!--<input type="file" name="filename"><br>-->
                <!--<input type="submit" value="Загрузить"><br>-->
            <!--</form>-->
            <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>
                <v-btn color="orange darken-1" flat="flat" @click="back()">Закрыть</v-btn>
                <v-btn color="orange darken-1" flat="flat" @click="saveProject(id,title,editorData, imgPath)">Сохранить</v-btn>
                <v-btn color="orange darken-1" flat="flat" @click="deleteNews(id)">Удалить</v-btn>
        </v-form>
    </v-container>
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    import axios from 'axios'

    export default {
        name: "EditorComponents",
        props: ['id'],
        data() {
            return {
                project: [],
                title: '',
                editor: ClassicEditor,
                id: this.id,
                imgPath:'',
                editorData: '',
                editorConfig: {
                    ckfinder: {
                        uploadUrl: location.protocol + "//" + location.host + '/app/sendIMG.php'
                    }
                },
            }
        },
        created() {
            axios.post('/app/getProjects.php',
                {
                    id: this.id
                })
                .then(response => {
                    console.log(response);
                    for (var i = 0; i < response.data.length; i++) {
                        this.project.push(JSON.parse(response.data[i]));
                    }
                    this.editorData = this.project[0].dsc;
                    this.title = this.project[0].title;
                    this.imgPath = this.project[0].img;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        methods: {
            saveProject(index,title,text, imgPath){
                this.editorData='';
                self=this;
                axios.post('/app/saveProject.php',
                    {
                        id: index,
                        title: title,
                        dsc: text,
                        img: imgPath
                    })
                    .then(function (response) {
                        self.$router.push({name: 'home'});
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            deleteNews(index){
                self=this;
                axios.post('/app/deleteProject.php',
                    {
                        id: index
                    })
                    .then(function (response) {
                        self.$router.push({name: 'home'});
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            back() {
                this.$router.push({name: 'home'});
            }
        }
    }
</script>

<style>
    .ck-content {
        color: black;
        width: auto;
    }
</style>