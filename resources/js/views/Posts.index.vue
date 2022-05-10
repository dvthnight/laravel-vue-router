<template>
    <div class="container grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <PostCard v-for="post in posts" :key="post.id" :post="post"/>
    </div>
    
</template>

<script>
import PostCard from "../components/PostCard.vue"
    export default {
        components:{
            PostCard
        },

        data(){
            return{
                posts: []
            }
        },
        methods: {
            fetchPosts(){
                axios.get("/api/posts")
                .then( res => {
                    this.posts = res.data.posts.data
                })
                .catch( err => {
                    console.warn(err)
                })
            }
        },
        mounted(){
            this.fetchPosts();
        }
    }
</script>

<style lang="scss" scoped>

</style>