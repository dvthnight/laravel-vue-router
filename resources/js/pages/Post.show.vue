<template>
    <div v-if="!loading">
        <img src="https://picsum.photos/id/237/1920/450" class="w-full " alt="">
        <section>
            <div class="max-w-[1080px] mx-auto py-10">
                <h1 class="text-3xl">{{post.title}}</h1>
                <p class="" v-if="post.category">{{post.category.name}}</p>
                <ul class="flex gap-3 items-center">
                    <li v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
                </ul>
                <div class="py-12" v-html="post.content">
                    {{post.content}}
                </div>
            </div>
        </section>
        
    </div>
</template>

<script>
    export default {
        data(){
            return {
                post: null,
                loading: true
            }
        },
        methods:{
           fetchPost(){
            axios.get(`/api/posts/${this.$route.params.slug}`)
            .then( res=> {
                const {post} = res.data
                this.post = post
                this.loading = false
            })
            .catch(err=>{
                console.warn(err)
                this.$router.push("/404")
            })
           }
        },
        beforeMount(){
            this.fetchPost()
            
        }
    }
</script>

<style lang="scss" scoped>

</style>