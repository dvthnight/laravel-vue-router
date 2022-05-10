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
        <main>
            <h1 class="text-7xl uppercase font-bold text-center my-11 bg-clip-text text-transparent bg-gradient-to-r from-rose-700 via-fuchsia-700 to-violet-700">Elenco dei Post</h1>
            <PostsGrid/>
        </main>
        <footer>
            &copy; Footer 2022
        </footer>
    </div>
</template>

<script>
    import PostsGrid from "./Posts.index.vue"
    export default {
        components:{
            PostsGrid,
        }
    }
</script>

<style lang="scss" scoped>
    .app{
        min-heght: 100vh;
    }
</style>