
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


var VueResource = require('vue-resource');

Vue.use(VueResource);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

<<<<<<< HEAD
Vue.component('example', require('./components/Example.vue'));
=======
Vue.component('example-component', require('./components/ExampleComponent.vue'));
<<<<<<< HEAD
Vue.component('users-component', require('./components/UsersComponent.vue'));
=======
>>>>>>> 50152922be911614af2e3e3e07e14530850b4033
>>>>>>> 7692020ee4ab0b8ec3dbe15b703db6ed5cb6487e

const app = new Vue({
    el: '#app',
});
