import VueRouter from 'vue-router'
import Home from './views/Home'
import About from "./views/About";
import Contact from "./views/Contact";

Vue.use(VueRouter);



const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        }
    ],

    linkActiveClass: 'is-active'


});


export default router;
