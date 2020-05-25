import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Draftboard from '../components/Pages/Draftboard.vue'
import Home from '../components/Pages/Home.vue'
import Login from '../components/Pages/Login.vue'
import Players from '../components/Pages/Players.vue'
import Rosters from '../components/Pages/Rosters.vue'

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/login',
            component: Login
        },
        {
            path: '/home',
            component: Home
        },
        {
            path: '/draft-board',
            component: Draftboard
        },
        {
            path: '/players',
            component: Players
        },
        {
            path: '/rosters',
            component: Rosters
        },
    ]
})
