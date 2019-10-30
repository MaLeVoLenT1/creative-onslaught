<template>
    <div>
        <!-- Home -->
        <transition name="fade"> <home/> </transition>
    </div>
</template>

<script>
    import Home from "./public/pages/Home";
    export default {
        name: "PublicPages",
        components: {Home}
    }
</script>

<style scoped>

</style>