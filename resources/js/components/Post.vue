<template>
    <div>
        <div class="container mx-auto my-32 grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">

            <PostCard
            v-for="post in posts"
            :key="post.id"
            :post="post"/>
            
<!-- <div class="p-10 flex justify-content overflow-hidden shadow-xl rounder"
            v-for="post in posts"
            :key="post.id">
            <img src="w-full" alt="">
            <div>
                <div class="py-1 font-bold text-xl">{{post.title}}</div>
                <div class="text-lg font-semibold" v-if="post.category">{{post.category.name}}</div>
                <div class="mt-5">
                    <span 
                    class="inline-block bg-cyan-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"
                    v-for="tag in post.tags" 
                    :key="tag.id">
                        {{tag.name}}
                    </span>
                </div>
                <p class="text-base mt-3">{{post.content}}</p>
            </div>
            </div> -->
        </div>
    </div>
</template>

<script>
import PostCard from "./PostCard.vue"

    export default {
        components: {
            PostCard
        },
        data() {
            return {
                posts: []
            }
        },
        methods: {
            fetchPost() {
                axios.get('/api/posts')
                .then (res => {
                    this.posts = res.data.posts
                    console.log(this.posts)
                })
                .catch(err => {
                    console.warn(err)
                })
            }
        },
        mounted(){
            this.fetchPost()
        }
    }
</script>

<style lang="scss" scoped>

</style>