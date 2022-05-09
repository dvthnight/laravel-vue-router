<template>
    <div class="post">
        <h3>{{post.title}}</h3>
        <p v-if="post.category" >{{post.category.name}}</p>
        <ul>
            <li v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
        </ul>
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