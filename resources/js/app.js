// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */

// require('./bootstrap');

// window.Vue = require('vue');

// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */

// // const files = require.context('./', true, /\.vue$/i);
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */

// const app = new Vue({
//     el: '#app',
// });

// //
// function trimSvgWhitespace() {

//   // get all SVG objects in the DOM
//   var svgs = document.getElementsByTagName("svg");

//   // go through each one and add a viewbox that ensures all children are visible
//   for (var i=0, l=svgs.length; i<l; i++) {

//     var svg = svgs[i],
//         box = svg.getBBox(), // <- get the visual boundary required to view all children
//         viewBox = [box.x, box.y, box.width, box.height].join(" ");

//     // set viewable area based on value above
//     svg.setAttribute("viewBox", viewBox);
//   }
// }

// trimSvgWhitespace();

// var cards = document.querySelectorAll('.js-routes-toggle');

// for (var i = 0; i < cards.length; i++) {
//   cards[i].addEventListener('click', function() {
//     this.classList.toggle('climber-card--expanded');
//   })
// }
