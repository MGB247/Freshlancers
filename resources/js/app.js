/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component("navbar-component", require("./components/NavbarComponent.vue"));
Vue.component("image-component", require("./components/ImageComponent.vue"));
Vue.component("about-component", require("./components/AboutComponent.vue"));
Vue.component(
    "work-force-component",
    require("./components/WorkForceComponent.vue")
);

const app = new Vue({
    el: "#app"
});
