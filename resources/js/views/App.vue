<template>
    <div>
        <header>
            Inizio SuperPost progetto
        </header>

        <MyMain/>

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