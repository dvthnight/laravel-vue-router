import Vue from "vue"
import VueRouter from  "vue-router"

Vue.use(VueRouter)

import Posts from "../pages/Posts.index.vue"

const routes = [
    {
        path: "/posts",
        component: Posts,
    }
]

const router = new VueRouter({
    mode:"history",
    routes,
})

export default router