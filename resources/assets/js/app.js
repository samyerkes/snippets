
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('alert', require('./components/Alert.vue'));
Vue.component('copy', require('./components/Copy.vue'));
Vue.component('snippet', require('./components/snippets/Snippet.vue'));
Vue.component('snippet-create', require('./components/snippets/Snippet-Create.vue'));

// New Event instance of Vue for emitting and listening to events between components
window.Event = new Vue();

const app = new Vue({
    el: '#app'
});
