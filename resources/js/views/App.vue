<template>
    <div class="bg-gradient-to-r from-green-200 to-blue-300">
        <header>
            Inizio SuperPost progetto
        </header>

        <router-view></router-view>

        <footer>
            Fine SuperPost progetto
        </footer>
    </div>
</template>

<script>
    import MyMain from "../components/MyMain.vue"

    export default {
        name: 'App',
        components: {
            MyMain,
        }
    }
</script>

<style lang="scss" scoped>

</style>