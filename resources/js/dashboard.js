import Vue from 'vue';
export const EventBus = new Vue();

window.vDashboard = new Vue({
    data(){
        return {
            location: ((typeof jsPass !== 'undefined') ? jsPass['page'] :  null),
            user: ((typeof jsPass !== 'undefined') ? jsPass['user'] : null),
            section: ((typeof jsPass !== 'undefined') ? jsPass['section'] :  null),
            requests: ((typeof jsPass !== 'undefined') ? jsPass['request'] :  null),
            hudControls:{mainHud: false, pageHud: false, sideHud: false, search:''},
            metrics:{
                window:{scrollDistance:0},
                sideNav:{top:0, left:0},
                pageNav:{},
                interfaces:{
                    home:{}
                },
                links:[]
            },
            userConfig:{isSignedIn: false, rank: ''},
        }

    },
    created(){
        let self = this;
        console.log("Dashboard Created.");

        EventBus.$on('updateRequest', function (request) {
            console.log("Updating Request Item Object");
            self.requests.item = request;
        });

        if(this.user.data){
            // Officially Signs in User to Client Interface
            console.log(`You're logged in as ${this.user.data.username}.Configuring user.`);
            this.userConfig.isSignedIn = true;

            // Assigns User Rank
            this.userConfig.rank = this.user.data.rank;
            console.log(`Rank set to ${this.user.data.rank}.`);

        }
        else console.log("User not signed in.");
    },
    computed:{
        computedInterface: function(){
            if(this.location.main === null)  return this.interfaces["home"];
            return this.interfaces[this.location.main];
        },
        computedSubLinks: function(){
            for(let x= 0; x < this.links.length; x++){
                if(this.links[x].name === this.location.main) return this.links[x].pages;
            }
        },
        /**
         *  This controls the button image icon on the Menu Interface
         *  TO DO: This needs updating. */
        computedBtn: function () {
            switch(this.location.main){
                case"community": return "guild-";
                case"news":  return "blog-";
                case"builds": return "builds-";
                case"wvw": return "wvw-";
                case"discord": return "admin-";
                case"about":return "raid-";
                default: return null;
            }
        },
        /**
         * This configures the Title on the Menu Interface.
         * This needs updating as well.
         * @returns {string} */
        computedTitle: function(){
            switch(this.location.main){
                case'community': return "Community Portal";
                case'news': return "News Portal";
                case'about': return "App Information";
                case'builds': return "Builds Library";
                case'wvw': return "WvW Portal";
                case'discord': return "Discord Portal";
                default: return "Creative-Onslaught";
            }
        }
    },
    methods:{
        /**
         * http://www.creative-onslaught.com/[main]/[sub]/[target]
         * @param request
         * @returns {Promise<void>}
         */
        async changeLocation(request){
            let self = this;
            let mainTitle = self.upperCaseFirstCharacter(request.title);
            let subTitle, url, id;

            if(request.sub === null){
                subTitle = self.upperCaseFirstCharacter(request.main);

                if(request.target !== null){
                    url = self.location.host + request.main + '/' + request.target;
                    id = `${request.main}-${request.target}`
                }
                else{
                    url = self.location.host + request.main;
                    id = `${request.main}-home`
                }
            }
            else{
                subTitle = self.upperCaseFirstCharacter(request.sub);

                if(request.target !== null){
                    url = self.location.host + request.main + '/' + request.sub + '/' + request.target;
                    id = `${request.sub}-${request.target}`
                }

                else{
                    url = self.location.host + request.main + '/' + request.sub;
                    id = `${request.main}-${request.sub}`
                }
            }

            history.pushState({id: id}, `${mainTitle} | ${subTitle}`, url);

            self.location.sub = request.sub;
            self.location.target = request.target;
            self.location.main = request.main;

            // Sets Links and Disables Links
            self.disableMainLinks();
            self.disableSubLinks();
            self.disableSideLinks();

            self.links.forEach((link) => {
                if(link.name === request.main){
                    if(request.main === 'home') link.active = true;
                    else link.pages.home.active = true;
                }

                else{
                    if(link.name === 'home') link.active = false;
                    else link.pages.home.active = false;
                }
            });
            if(self.location.sub !== null){
                $(document).prop('title', 'CO | ' + self.upperCaseFirstCharacter(self.location.main) + ' | ' + self.upperCaseFirstCharacter(self.location.sub));
            }
            else{
                if(self.location.target === null) $(document).prop('title', 'CO | ' + self.upperCaseFirstCharacter(self.location.main));
                else $(document).prop('title', `CO | ${self.upperCaseFirstCharacter(self.location.main)} | ${self.upperCaseFirstCharacter(self.location.target)}`);
            }
        },

        upperCaseFirstCharacter(text) {return String(text).charAt(0).toUpperCase() + String(text).slice(1);},
        disableMainLinks(){
            this.links.forEach((link) => {
                if (link.name === "home") link.active = false;
                else link.pages.home.active = false
            })
        },
        disableSubLinks(){
            this.links.forEach((link) => {
                if (link.name !== "home" || "login"){
                    for (let key in link.pages) {
                        if (Object.prototype.hasOwnProperty.call(link.pages, key)) {
                            if(key !== "home")link.pages[key].active = false;
                        }
                    }
                }
            });
        },
        disableSideLinks(){
            this.links.forEach((link) => {
                if (link.name !== "home" || "login"){
                    for (let key in link.pages) {
                        if (Object.prototype.hasOwnProperty.call(link.pages, key)) {
                            link.pages[key].links.forEach((sideLink) => sideLink.active = false);
                        }
                    }
                }
            });
        },
        hudState(change){
            this.hudControls[change.hud + 'Hud'] = change.action;
        },
        updateSearch(string){
            console.log(`Searching for '${string}'.`);
            this.hudControls.search = string;
            // Run Search.
        },


    }

});