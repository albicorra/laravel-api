<template>
        <div class="p-10 flex justify-content overflow-hidden items-center shadow-xl rounder">
            <img src="w-full" alt="">
            <div>
                <div class="py-1 font-bold text-xl">{{post.title}}</div>
                <div class="pb-5 text-lg font-semibold" v-if="post.category">{{post.category.name}}</div>
                <div class="">
                    <span 
                    class="inline-block bg-cyan-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"
                    v-for="tag in post.tag" 
                    :key="tag.id">
                        {{tag.name}}
                    </span>
                </div>
                <p class="text-base">{{post.content}}</p>
            </div>
        </div>
</template>

<script>
    export default {
        name: 'PostCard',
        props:{
            type: Object,
            require: false,
        }
    }
</script>

<style lang="scss" scoped>

</style>