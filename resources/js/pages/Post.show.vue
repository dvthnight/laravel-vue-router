<template>
    <div v-if="post">
        Pagina di dettaglio del post {{post.title}}
    </div>
</template>

<script>
    export default {
        data(){
            return {
                post: null
            }
        },
        beforeMount(){

            axios.get(`/api/posts/${this.$route.params.slug}`)
            .then( res=> {
                const {post} = res.data
                this.post = post
            })
            .catch(err=>{
                console.warn(err)
            })
        }
    }
</script>

<style lang="scss" scoped>

</style>