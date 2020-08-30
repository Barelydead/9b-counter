
/**
 * Create a vue instance and attach the components
 */
import Vue from 'vue';
import jQuery from 'jquery';
import bootstrap from 'bootstrap';

window.$ = jQuery



import climbingCard from './components/ClimbingCard.vue';

const app = new Vue({
   el: '#app',
   components: {
    climbingCard
   }
});
