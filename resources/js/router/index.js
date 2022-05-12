import { defaultTo } from 'lodash'
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Post from '../pages/Post.vue'
import PostShow from '../pages/PostShow.vue'

const routes = [
    {
        path: '/post',
        name: 'post.index',
        component: Post,
    },
    {
        path: '/post/:slug',
        name: 'post.show',
        component: PostShow,
    },
]

const router = new VueRouter({
    mode: 'history',
    routes,
})

export default router