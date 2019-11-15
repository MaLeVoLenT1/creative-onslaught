/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//High Charts
require('../../node_modules/highcharts/highcharts');
require('../../node_modules/highcharts/modules/data');
require('../../node_modules/highcharts/modules/drilldown');

require('../../node_modules/jquery.nicescroll/jquery.nicescroll.js');
require('../../node_modules/floatthead/src/jquery.floatThead.js');
require('../../node_modules/sticky-kit/dist/sticky-kit.min');
require('malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min');
require('jquery.easing/jquery.easing.min');
require('bootbox/bootbox.min');
require('gritter/js/jquery.gritter.min');
require('floatthead/src/jquery.floatThead');
require('jquery-countto/jquery.countTo');
require('jquery.countdown/jquery.countdown');
require('jquery-parallax.js/parallax.min');
require('flexslider/jquery.flexslider-min');
require('isotope-layout/dist/isotope.pkgd.min');
require('../../node_modules/imagesloaded/imagesloaded.pkgd');
require('magnific-popup/dist/jquery.magnific-popup.min');
require('owl.carousel/dist/owl.carousel.min');
require('smooth-scroll/dist/js/smooth-scroll.min');
require('bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min');
require('jquery-sticky/jquery.sticky');
require('jquery.waitforimages');

require('tooltipster/dist/js/tooltipster.bundle.min');
require('tooltipster-follower/dist/js/tooltipster-follower.min');
window.DropZone = require('../../node_modules/dropzone/dist/dropzone');


//Vue
window.Vue = require('vue');
require('vue-recaptcha');
import VueFroala from 'vue-froala-wysiwyg'
import 'froala-editor/js/froala_editor.pkgd.min'
Vue.use(VueFroala);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


