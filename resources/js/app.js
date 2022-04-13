

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router';
Vue.use(VueRouter)

// Router Imported
import { routes } from './routes';

//User Imported
import User from './Helpers/User';
Window.User= User


const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router
});
