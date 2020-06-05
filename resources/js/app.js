// require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('user-list', require('./components/UserList.vue').default);

const app = new Vue({
    el: '#app',
});
