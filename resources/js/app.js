// main.js

require('./bootstrap');

import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
//import routes from './routes';
import BootstrapVue from 'bootstrap-vue'
import { store } from './store/store';
import Vuex from 'vuex'
import router from "./routes";


Vue.config.productionTip = false;

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(BootstrapVue);
Vue.use(Vuex);

// const router = new VueRouter({
//
//   store: store,
//   routes,
//   mode: 'history'
// })

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    if (!store.getters.loggedIn) {
      next({
        name: 'login',
      })
    } else {
      next()
    }
  } else if (to.matched.some(record => record.meta.requiresVisitor)) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    if (store.getters.loggedIn) {
      next({
        name: 'dashboard',
      })
    } else {
      next()
    }
  } else {
    next() // make sure to always call next()!
  }
})

new Vue({
    store: store,
    router,
    render: h => h(App)
}).$mount('#app');

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
