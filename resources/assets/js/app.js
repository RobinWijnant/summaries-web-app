
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// window.Vue = require('vue');
require('select2/dist/js/select2.min');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });


// Default bootstrap theme for select2
$.fn.select2.defaults.set('theme', 'bootstrap');
$.fn.select2.defaults.set('width', '100%');


var currPage = window.location.href;
currPage = currPage.substr(currPage.lastIndexOf('/') + 1);

if (currPage == 'edit') {
    require('./summaries.edit');
}
if (currPage == 'create') {
    require('./summaries.create')
}