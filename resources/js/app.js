

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router';
Vue.use(VueRouter)

// Router Imported
import { routes } from './routes';

//User Imported
import User from './Helpers/User';
window.User= User

//sweetlalert2
import Swal from 'sweetalert2'
window.Swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

window.Toast = Toast;


//end sweetalert2
const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router
});
