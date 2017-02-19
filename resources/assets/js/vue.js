import Vue from 'vue';
import Dropzone from 'dropzone';
import Cropper from 'cropperjs';

window.Vue = Vue;
window.Dropzone = Dropzone;

require('./Core/Classes'); // Pulls in some helper classes

require('owl-carousel-2/owl.carousel');

// image uploader
Vue.component('image-display', require('./components/ImageDisplay.vue'));
Vue.component('image-uploader', require('./components/ImageUploader.vue'));
Vue.component('cropper', require('./components/Cropper.vue'));

// image slider
Vue.component('image-slider', require('./components/image-sliders/owl-image-slider.vue'));
Vue.component('slide', require('./components/image-sliders/slide-types/basic-slide.vue'));

Vue.component('m4y-mentor', require('./components/Mentorlist/M4y-mentor.vue'));
Vue.component('m4y-mentorlist', require('./components/Mentorlist/M4y-mentorlist.vue'));

new Vue({
    el: '#app'
});