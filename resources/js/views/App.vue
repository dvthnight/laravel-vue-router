<template>
    <div class="app bg-slate-800 text-white">
        <header>
            <nav class="py-8 flex gap-6 items-center">
                <ul class="contents">
                    <li>
                        <router-link to="/posts">Posts</router-link>
                    </li>
                    <li>
                        <router-link to="/contact">Contact</router-link>
                    </li>
                    <li>
                        <router-link to="/categories">Categories</router-link>
                    </li>
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