import VueRouter from "vue-router";
import Home from "./views/Home";


const routes = [
    {
        path: '/',
        component: Home
    }
];

const router = new VueRouter({
    routes // short for `routes: routes`
});




export default new VueRouter({

    router

}).$mount('#app');
