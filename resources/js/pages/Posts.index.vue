<template>
    <main>
        <h1 class="text-7xl uppercase font-bold text-center my-11 bg-clip-text text-transparent bg-gradient-to-r from-rose-700 via-fuchsia-700 to-violet-700">Elenco dei Post</h1>
        <div class="container grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <PostCard v-for="post in posts" :key="post.id" :post="post"/>
        </div>
        <div class="container">
            <ul class="pagination flex justify-center gap-4 items-center">
                <li @click="fetchPosts(n)" :class="[currentPage === n ? 'text-orange-400': 'text-white','dot cursor-pointer py-10']" v-for="n in lastPage" :key="n">{{n}}</li>
            </ul>
        </div>
    </main>
    
</template>

<script>
import PostCard from "../components/PostCard.vue"
    export default {
        components:{
            PostCard
        },

        data(){
            return{
                posts: [],
                last_page: 0,
                current_page: 1,

            }
        },
        methods: {
            fetchPosts(page = 1){
                axios.get("/api/posts",{
                    params:{
                        page

                    }
                })
                .then( res => {
                    const{posts} = res.data
                    const {data, last_page, current_page} = posts
                    this.posts = data
                    this.currentPage = current_page
                    this.lastPage = last_page
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