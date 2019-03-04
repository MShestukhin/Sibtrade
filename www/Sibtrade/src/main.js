import Vue from 'vue'
import './plugins/vuetify'
import App from './App.vue'
import Router from 'vue-router'
import Main from './components/Main.vue'
import  HelloWorld from './components/More'
import  Provider from './components/Provider'
import  Product from './components/Product'
import  Contacts from './components/Contacts'
import  Company from './components/Company'
import  Designer from './components/Designer'
import  EditorComponents from './components/EditorComponents'
import  Project from './components/Project'
import  NewProduct from './components/NewProduct'
// register globally
import YmapPlugin from 'vue-yandex-maps'
import CKEditor from '@ckeditor/ckeditor5-vue';
Vue.use( CKEditor );
Vue.use(YmapPlugin)
Vue.use(Router)

const router = new Router({
    routes: [
        {
            path: '/admin',
            name:'admin',
            component: Main
        },
        {
            path: '/',
            name:'home',
            component: Main
        },
        {
            path: '/post/:link',
            name:'post',
            component: HelloWorld,
            props: true
        },
        {
            path: '/edit/:id',
            name:'edit',
            component: EditorComponents,
            props: true
        },
        {
            path: '/project/:id',
            name:'project',
            component: Project,
            props: true
        },
        {
            path: '/provider',
            name:'provider',
            component: Provider,
            props: true
        },
        // {
        //     path: '/product',
        //     name:'product',
        //     component: Product,
        //     props: true
        // },
        {
            path: '/product',
            name:'product',
            component: NewProduct,
            props: true
        },
        {
            path: '/contacts',
            name:'contacts',
            component: Contacts,
            props: true
        },
        {
            path: '/company',
            name:'company',
            component: Company,
            props: true
        },
        {
            path: '/designer',
            name:'designer',
            component: Designer,
            props: true
        },
    ]
})

// or for a single instance
Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  router
}).$mount('#app')
