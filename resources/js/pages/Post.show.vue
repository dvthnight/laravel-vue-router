<template>
    <div>
        Pagina di dettaglio del post {{$route.params.slug}}
    </div>
</template>

<script>
    export default {
        beforeMount(){

            axios.get(`/api/posts/${this.$route.params.slug}`)
        }
    }
</script>

<style lang="scss" scoped>

</style>