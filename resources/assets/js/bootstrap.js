import axios from 'axios';

window.axios = axios;

axios.defaults.headers.common['X-CSRF-TOKEN'] = Laravel.csrfToken;
Dropzone.options.myAwesomeDropzone = {
    headers: { "X-CSRF-TOKEN": Laravel.csrfToken },
};
window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');