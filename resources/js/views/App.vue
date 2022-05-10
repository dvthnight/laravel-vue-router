<template>
    <div class="app bg-slate-800 text-white">
        <header>
            <nav>
                <ul>
                    <li>Home</li>
                    <li>Post</li>
                    <li>Categories</li>
                </ul>
            </nav>
        </header>
            <router-view></router-view>
        <footer>
            &copy; Footer 2022
        </footer>
    </div>
</template>

<script>
    import PostsGrid from "../pages/Posts.index.vue"
    export default {
        components:{
            PostsGrid,
        }
    }
</script>

<style lang="scss" scoped>
    .app{
        min-height: 100vh;
    }
</style>