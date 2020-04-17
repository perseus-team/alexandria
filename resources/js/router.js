import Vue from "vue";
import VueRouter from "vue-router";
import MyBooks from "./views/MyBooks.vue";

Vue.use(VueRouter);

export default new VueRouter({
    mode: "history",

    routes: [
        {
            path: "/",
            name: "my-books",
            component: MyBooks,
            meta: { title: "My Books" },
        },
    ],

});
