<template>
    <div class="post rounded-lg  border-4 border-sky-700/60 shadow-lg shadow-sky-700/50 overflow-hidden">
        <img src="https://picsum.photos/id/237/500/300" class="w-full object-cover" alt="">
        <div class="card_body p-6">
            <h3 class="mb-4 text-lg">{{post.title}}</h3>
            <p class="w-20 text-center text-sm  bg-purple-500 rounded mb-4" v-if="post.category" >{{post.category.name}}</p>
            <ul class="flex gap-4 flex-wrap items-center">
                <li class="bg-gradient-to-r from-rose-400 via-pink-500 to-fuchsia-600 block px-4 py-0.5  rounded-full text-xs" v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
            </ul>
            <router-link tag="button" :to="{name: 'posts.show', params: {slug: post.slug}}">Leggi</router-link>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            post: {
            type: Object,
            required: false
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>