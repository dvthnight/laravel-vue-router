import Vue from "vue"
import VueRouter from  "vue-router"

Vue.use(VueRouter)

import Posts from "../pages/Posts.index.vue"
import Post from "../pages/Post.show.vue"
import Contact from "../pages/Contact.index.vue"
import Categories from "../pages/Categories.index.vue"
import NotFound from "../pages/404.vue"

const routes = [
    {
        path: "/posts",
        component: Posts,
    },
    {
        path: "/posts/:slug",
        name: "posts.show",
        component: Post
    },
    {
        path: "/contact",
        component: Contact
    },
    {
        path: "/categories",
        component: Categories
    },
    {
        path: "/*",
        component: NotFound
    },
]

const router = new VueRouter({
    mode:"history",
    routes,
})

export default router