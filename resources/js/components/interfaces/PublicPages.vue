<template>
    <div>
        <!-- Header Bar -->
        <header-bar v-if="location.main !== ''" :header-style="headerStyle" :header-color="'dark'"/>
        <!-- Landing -->
        <transition name="fade"> <landing v-if="location.main === ''"/> </transition>

        <!-- Home -->
        <transition name="fade"> <home v-if="location.main ==='home'"/> </transition>

        <!-- Login & Register -->
        <transition name="fade"> <login v-if="location.main === 'login'"/> </transition>

        <!-- About -->
        <transition name="fade"> <about v-if="location.main === 'about'"/> </transition>

        <!-- News -->
        <transition name="fade"> <news v-if="location.main === 'news'"/> </transition>

        <!-- Authenticated User Profile -->
        <transition name="fade"> <profile v-if="location.main === 'profile'"/> </transition>

    </div>
</template>

<script>
    import Home from "./public/pages/Home";
    import Landing from "./public/pages/Landing";
    import Login from "./public/pages/Login";
    import About from "./public/pages/About";
    import News from "./public/pages/News";
    import Profile from "./public/pages/Profile";
    import HeaderBar from "./public/UI/HeaderBar";
    export default {
        name: "PublicPages",
        components: {HeaderBar, Profile, News, About, Login, Landing, Home},
        data(){
            return {
                location: window.vDashboard.location, user: window.vDashboard.user,
                section: window.vDashboard.section, requests: window.vDashboard.requests
            }
        },
        computed:{
            headerStyle:function(){
                switch(window.vDashboard.location.main){
                    case'home': return 'fixed';
                    default: return 'floating';
                }
            }
        }
    }
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .3s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0
    }
</style>