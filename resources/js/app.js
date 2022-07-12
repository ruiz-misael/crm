require('./bootstrap');
import moment from 'moment';

window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('reservas-component', require('./components/ReservasComponent.vue').default);
Vue.component('chatbot-component', require('./components/ChatbotComponent.vue').default);



const app = new Vue({
    el: '#app',
});
