require('./Core/Classes');

Vue.component('image-display', require('./components/ImageDisplay.vue'));
Vue.component('image-uploader', require('./components/ImageUploader.vue'));
Vue.component('cropper', require('./components/Cropper.vue'));

Vue.component('m4y-mentor', require('./components/Mentorlist/M4y-mentor.vue'));
Vue.component('m4y-mentorlist', require('./components/Mentorlist/M4y-mentorlist.vue'));

new Vue({
    el: '#app'
});