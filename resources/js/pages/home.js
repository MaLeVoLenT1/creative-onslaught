require('../app');
require('../dashboard');
import PublicPages from '../components/interfaces/PublicPages';
import Vue from 'vue';
const app = new Vue({
    el: '#app',
    components: {
        'public-pages': PublicPages,
    },
    data: {
        ui:{userMenu: false},
        host: ((typeof jsPass !== 'undefined') ? jsPass['page']['host'] :  null),
    },
    mounted(){
        let $window, $document, $body;

        $window = $(window);
        $document = $(document);
        $body = $("body");

    }
});