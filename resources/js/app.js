import Vue from "vue";
import router from "./router";
import App from "./components/App.vue";

require("./bootstrap");

// eslint-disable-next-line no-unused-vars
const app = new Vue({
    el: "#app",

    components: {
        App,
    },

    router,
});
