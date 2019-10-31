<template>
    <ul class="menuzord-menu menuzord-right c-nav_s-standard">
        <!-- First Portal Links -->
        <li v-for="link in links" v-if="link.name !=='home' && link.pages.home.sorting === 'first'" style="padding: 0;">
            <a href="javascript:void(0)" class="header-text" :class="{active:link.pages.home.active}" @click="linkClick('main', link)"> {{link.pages.home.abbreviation}} </a>
        </li>

        <li style="padding: 0;" class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a></li>

        <!-- Second Portal Links -->
        <li v-for="link in links" v-if="link.name !=='home' && link.pages.home.sorting === 'second'" style="padding: 0;">
            <a @click="linkClick('main', link)" class="header-text" :class="{active:link.pages.home.active}" href="javascript:void(0)"> {{link.pages.home.abbreviation}} </a>
        </li>

        <!-- Home Link -->
        <li v-for="link in links" v-if="link.name ==='home'" style="padding: 0;">
            <a href="javascript:void(0)" class="header-text" :class="{active:link.active}" @click="linkClick('main', link)"> {{link.abbreviation}} </a>
        </li>

        <li style="padding: 0;" class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a></li>

        <!-- Login Information Option -->
        <li style="padding: 0;" v-if="user.data === null"><a :href="location.host + 'login'"> Login</a></li>
        <li style="padding: 0;" v-if="user.data !== null" class="cart-info">
            <a href="javascript:void(0)" style="text-transform: none;">
                <i class="fa fa-user-o"></i>
                <span v-if="user.data.display_name !== null">{{user.data.display_name}}</span>
                <span v-if="user.data.display_name === null">{{user.data.username}}</span>
            </a>
            <div class="megamenu megamenu-quarter-width">
                <div class="megamenu-row">
                    <div class="col12">
                        <div class="profile-header-information">
                            <ul>
                                <li v-if="user.data.display_name !== null" class="user-account">{{user.data.gw2_account_name}}</li>
                                <li v-if="user.data.display_name === null" class="user-account">{{user.data.username}}</li>
                                <li class="user-email">{{user.data.email}}</li>
                            </ul>


                        </div>
                        <div class="profile-header-container">
                            <img :src="location.host + 'images/icons/user-icon-teal.png'" class="menu-user-image"/>
                            <div v-if="user.data.is_commander" class="user-commander">
                                <img :src="location.host + 'images/icons/guildwars2/commander_icons/Commander_tag_blue.png'" class="commander-icon"/>
                            </div>
                        </div>


                        <div class="total-cart pull-right">
                            <ul>
                                <li><span>Sub Total</span>  <span>$ 2000.00 </span></li>
                                <li><span>Total </span>  <span>$ 2000.00 </span></li>
                            </ul>
                        </div>
                        <div class="s-cart-btn pull-right">
                            <a :href="location.host + 'profile/settings'" class="btn btn-small btn-theme-color" style="font-size: 10px;"> Settings </a>
                            <a :href="location.host + 'profile'" class="btn btn-small btn-theme-color" style="font-size: 10px;"> Profile </a>
                            <a :href="location.host + 'logout'" onclick="preventDefault();
                                        document.getElementById('logout-form').submit();"
                               class="btn btn-small btn-theme-color"
                            >
                                Log Out
                            </a>
                            <form id="logout-form" action="logout" method="POST" style="display: none;"></form>
                        </div>
                        <!--cart-->

                    </div>
                </div>
            </div>
        </li>

    </ul>
</template>

<script>
    export default {
        name: "HeaderOptions",
        data(){
            return{
                location: window.vDashboard.location,
                user: window.vDashboard.user,
                userConfig: window.vDashboard.userConfig,
                links: window.vDashboard.links,
            }
        },
        mounted(){},
        methods:{
            linkClick(type, link){
                window.vDashboard.changeLocation({
                    main:link.name,
                    sub:null,
                    target:null,
                    title: link.name
                });

            },
        }
    }
</script>
