<template>
    
</template>

<script>
    export default {
        name: "HeaderBar",
        props:{
            headerStyle:{'default': 'fixed'},
            headerColor:{'default': 'dark'},
        },
        components:{},
        data(){
            return{
                location: window.vDashboard.location,
                // Movement Controls
                isMoved: false, isOverlay: false, isFloating: false,
                isCenter: false, isFluid: false, isContainer: true,
                isDark: true, isLight: false, showIcon: false,
            }
        },
        computed:{
            showDisplay:function(){
                if(this.isFloating && !this.isMoved) return true;
                else return false;
            }
        },
        mounted(){

        },
        methods:{

        }
    }
</script>

<style scoped>

</style>