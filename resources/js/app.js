import vue from "vue";

require('./bootstrap');
window.Vue = vue;

Vue.component('example-component',require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
