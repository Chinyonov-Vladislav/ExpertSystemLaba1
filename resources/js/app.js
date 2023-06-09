/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import Fragment from 'vue-fragment'
Vue.use(Fragment.Plugin)
import VueTree from '@ssthouse/vue-tree-chart'
Vue.component('vue-tree', VueTree)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//компоненты
Vue.component('main-header',require("./components/LayoutComponents/header").default)
Vue.component('main-footer',require("./components/LayoutComponents/footer").default)
Vue.component("question",require("./components/LayoutComponents/QuestionComponent").default)
Vue.component('modal',require("./components/LayoutComponents/modal").default)
Vue.component("error-component",require("./components/LayoutComponents/ErrorComponent").default)
//Страницы
Vue.component("main-page",require("./components/Pages/MainPage").default)
Vue.component("question-page",require("./components/Pages/QuestionPage").default)
Vue.component("result-page",require("./components/Pages/ResultPage").default)
Vue.component("show-graph-page",require("./components/Pages/ShowingGraphPage").default)
Vue.component("error-page",require("./components/Pages/ErrorPage").default)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
