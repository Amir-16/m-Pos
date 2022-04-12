import { forEachRight } from 'lodash';

let login = require('./components/auth/login.vue').default;

let register = require('./components/auth/register.vue').default;
let forget = require('./components/auth/forget.vue').default;
let home = require('./components/home.vue').default;

// import home from './components/home.vue';


// import login from './components/auth/login.vue';
// import register from './components/auth/register.vue';

 export const routes = [
    { path: '/', component: login,name:'/' },
    { path: '/register', component: register, name: 'register' },
    { path: '/forget', component: forget, name: 'forget' },
    {path:'/dashboard',component:home, name:'home'}
]
