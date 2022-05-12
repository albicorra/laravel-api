<template>
    <div>
        <div class="container mx-auto ">
            <div class="my-32 grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">

                <!-- <PostCard
                v-for="post in posts"
                :key="post.id"
                :post="post"/> -->
                <div class="p-10 flex justify-content overflow-hidden shadow-xl rounder bg-white"
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

                        <router-link
                        tag="div" 
                        :to="{ name: 'post.show', params: {slug: post.slug} }" 
                        class="bg-teal-300 text-center rounded-full py-2 my-3 cursor-pointer">
                            Visualizza
                        </router-link>
                    </div>
                </div>
            </div>
            

            <div class="pages">
                <span 
                :class="[ currentPage === n ? 'bg-violet-400' : 'bg-blue-400', 'page hover:bg-violet-400']"
                v-for="n in lastPage" 
                :key="n"
                @click="fetchPost(n)">
                    {{n}}
                </span>
                
            </div>
        </div>
    </div>
</template>

<script>
import PostCard from '../components/PostCard.vue'

    export default {
        components: {
            PostCard
        },
        data() {
            return {
                posts: [],
                currentPage: 1,
                lastPage: 0, 
            }
        },
        methods: {
            fetchPost(page = 1) {
                axios.get('/api/posts',{
                    params: {
                        page
                    }
                })
                .then (res => {
                    this.posts = res.data.posts.data
                    this.currentPage = res.data.posts.current_page
                    this.lastPage = res.data.posts.last_page
                    console.log(this.currentPage)
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