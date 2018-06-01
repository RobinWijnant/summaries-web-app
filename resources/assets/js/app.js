
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
$(document).ready(function() {
    $.fn.select2.defaults.set('theme', 'bootstrap');
    $.fn.select2.defaults.set('width', '100%');
});

var currPage = window.location.href;
currPage = currPage.substr(currPage.lastIndexOf('/') + 1).split('?')[0];

if (currPage == 'edit') {
    require('./summaries.edit');
}
if (currPage == 'create') {
    require('./summaries.create')
}
if (currPage == 'search') {
    require('./summaries.edit')
}

$(document).ready(function() {

    let domainName = 'http://' + window.location.host;

    let updateSelectbox = function(className, url, placeholder) {
        $.ajax(url, {
            success: function(object) {
                var formatted = [];
                Object.keys(object).map(function(key, index) {
                    formatted.push({'id': key, 'text': object[key]});
                });
                formatted.unshift({'id': '', text: null});
                $(className).empty()
                .select2({placeholder: placeholder, data: formatted})
                .prop('disabled', false)
                .trigger('change');
            }
        });
    }

    let resetSelectBox = function(className, placeholder) {
        $(className).empty()
        .select2({placeholder: placeholder, data: [{id: '', text: null}]})
        .prop('disabled', true)
        .trigger('change');
    }
    
    if ($('.select2School').val() == '') {
        resetSelectBox('.select2Education', 'Opleiding');
    }

    if ($('.select2Education').val() == '') {
        resetSelectBox('.select2Course', 'Vak');
    }

    $('.select2School').on('select2:select', function (e) {        
        var schoolId = e.params.data.id;
        var url = domainName + '/api/educations-for-school/' + schoolId;
        updateSelectbox('.select2Education', url, 'Opleiding');
        resetSelectBox('.select2Course', 'Vak');
    });

    $('.select2Education').on('select2:select', function (e) {        
        var educationId = e.params.data.id;
        var url = domainName + '/api/courses-for-education/' + educationId;
        updateSelectbox('.select2Course', url, 'Vak');
    });
});