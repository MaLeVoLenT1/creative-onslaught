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

        <!-- User Pages -->
        <transition name="fade"> <UserGeneral v-if="location.main === 'users' && location.sub === ''"/> </transition>

        <!-- Customers Pages -->
        <transition name="fade"> <CustomerGeneral v-if="location.main === 'customers' && location.sub === ''"/> </transition>
        <transition name="fade">  <AddCustomer v-if="location.main === 'customers' && location.sub === 'add'"/> </transition>
        <transition name="fade"> <EditCustomer v-if="location.main === 'customers' && location.sub === 'edit'"/> </transition>
        <transition name="fade">  <ViewCustomer v-if="location.main === 'customers' && location.sub === 'view'"/> </transition>

        <!-- Product Pages -->
        <transition name="fade"> <ProductGeneral v-if="location.main === 'products' && location.sub === ''"/> </transition>
        <transition name="fade"> <AddProduct v-if="location.main === 'products' && location.sub === 'add'"/> </transition>
        <transition name="fade"> <EditProduct v-if="location.main === 'products' && location.sub === 'edit'"/> </transition>
        <transition name="fade"> <ViewProduct v-if="location.main === 'products' && location.sub === 'view'"/> </transition>

        <!-- Component Pages -->
        <transition name="fade"> <ComponentGeneral v-if="location.main === 'component' && location.sub === ''"/></transition>
        <transition name="fade"> <AddComponent v-if="location.main === 'component' && location.sub === 'add'"/> </transition>
        <transition name="fade"> <EditComponent v-if="location.main === 'component' && location.sub === 'edit'"/> </transition>

        <!-- Concentration Pages -->
        <transition name="fade"> <ConcentrationGeneral v-if="location.main === 'concentration' && location.sub === ''"/> </transition>
        <transition name="fade"> <AddConcentration v-if="location.main === 'concentration' && location.sub === 'add'"/> </transition>
        <transition name="fade"> <EditConcentration v-if="location.main === 'concentration' && location.sub === 'edit'"/> </transition>

        <!-- Formula Pages -->
        <transition name="fade"> <FormulaGeneral v-if="location.main === 'formulas' && location.sub === ''"/> </transition>
        <transition name="fade"> <AddFormula  v-if="location.main === 'formulas' && location.sub === 'add'"/> </transition>
        <transition name="fade"> <EditFormula v-if="location.main === 'formulas' && location.sub === 'edit'"/> </transition>

        <!-- Impurities Pages -->
        <transition name="fade"> <ImpuritiesGeneral v-if="location.main === 'impurities' && location.sub === ''"/> </transition>
        <transition name="fade"> <AddImpurities  v-if="location.main === 'impurities' && location.sub === 'add'"/> </transition>
        <transition name="fade"> <EditImpurities  v-if="location.main === 'impurities' && location.sub === 'edit'"/> </transition>

        <!-- Methods Pages -->
        <transition name="fade"> <MethodGeneral v-if="location.main === 'methods' && location.sub === ''"/> </transition>
        <transition name="fade"> <AddMethod v-if="location.main === 'methods' && location.sub === 'add'"/> </transition>
        <transition name="fade"> <EditMethod v-if="location.main === 'methods' && location.sub === 'edit'"/> </transition>

        <!-- Purpose Pages -->
        <transition name="fade"> <PurposeGeneral v-if="location.main === 'purpose' && location.sub === ''"/> </transition>
        <transition name="fade"> <AddPurpose v-if="location.main === 'purpose' && location.sub === 'add'"/> </transition>
        <transition name="fade"> <EditPurpose v-if="location.main === 'purpose' && location.sub === 'edit'"/> </transition>

        <!-- Sample ID Pages -->
        <transition name="fade"> <SampleIDGeneral v-if="location.main === 'Samples' && location.sub === ''"/> </transition>
        <transition name="fade"> <AddSampleID  v-if="location.main === 'Samples' && location.sub === 'add'"/> </transition>
        <transition name="fade"> <EditSampleID  v-if="location.main === 'Samples' && location.sub === 'edit'"/> </transition>


        <!-- About
        <transition name="fade"> <about v-if="location.main === 'about'"/> </transition>-->

        <!-- News
        <transition name="fade"> <news v-if="location.main === 'news'"/> </transition> -->

        <!-- Authenticated User Profile
        <transition name="fade"> <profile v-if="location.main === 'profile'"/> </transition> -->

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
    import UserGeneral from "./public/pages/UserGeneral";
    import CustomerGeneral from "./public/pages/CustomerGeneral";
    import AddCustomer from "./public/pages/AddCustomer";
    import EditCustomer from "./public/pages/EditCustomer";
    import ViewCustomer from "./public/pages/ViewCustomer";
    import ProductGeneral from "./public/pages/ProductGeneral";
    import AddProduct from "./public/pages/AddProduct";
    import EditProduct from "./public/pages/EditProduct";
    import ViewProduct from "./public/pages/ViewProduct";
    import AddComponent from "./public/pages/AddComponent";
    import ComponentGeneral from "./public/pages/ComponentGeneral";
    import EditComponent from "./public/pages/EditComponent";
    import ConcentrationGeneral from "./public/pages/ConcentrationGeneral";
    import AddConcentration from "./public/pages/AddConcentration";
    import EditConcentration from "./public/pages/EditConcentration";
    import FormulaGeneral from "./public/pages/FormulaGeneral";
    import AddFormula from "./public/pages/AddFormula";
    import EditFormula from "./public/pages/EditFormula";
    import ImpuritiesGeneral from "./public/pages/ImpuritiesGeneral";
    import AddImpurities from "./public/pages/AddImpurities";
    import EditImpurities from "./public/pages/EditImpurities";
    import MethodGeneral from "./public/pages/MethodGeneral";
    import AddMethod from "./public/pages/AddMethod";
    import EditMethod from "./public/pages/EditMethod";
    import PurposeGeneral from "./public/pages/PurposeGeneral";
    import AddPurpose from "./public/pages/AddPurpose";
    import EditPurpose from "./public/pages/EditPurpose";
    import SampleIDGeneral from "./public/pages/SampleIDGeneral";
    import AddSampleID from "./public/pages/AddSampleID";
    import EditSampleID from "./public/pages/EditSampleID";
    export default {
        name: "PublicPages",
        components: {
            EditSampleID, AddSampleID, SampleIDGeneral,
            EditPurpose, AddPurpose, PurposeGeneral, EditMethod, AddMethod,
            MethodGeneral, EditImpurities, AddImpurities, ImpuritiesGeneral, EditFormula,
            AddFormula, FormulaGeneral, EditConcentration, AddConcentration, ConcentrationGeneral,
            EditComponent, ComponentGeneral, AddComponent, ViewProduct, EditProduct,
            AddProduct, ProductGeneral, ViewCustomer, EditCustomer,
            AddCustomer, CustomerGeneral, UserGeneral, HeaderBar, Profile, News, About, Login, Landing, Home},
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