import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

import App from '../../templates/App.vue';

/*export const express = require('express');
export const bodyParser = require('body-parser');
export const cookieParser = require('cookie-parser');
export const methodOverride = require('method-override');
export const session = require('express-session');
export const passport = require('passport');
export const swig = require('swig');
export const SpotifyStrategy = require('../../lib/passport-spotify/index').Strategy;

export const consolidate = require('consolidate');

export const appKey = '3865daab34f34ad4b45d7e8f730fc2ef';
export const appSecret = '40592c341d254973be8eaf2fc649df18';*/

Vue.use(BootstrapVue);


//export const url = "http://localhost/laliga/public/index.php/api/v1/player";


new Vue({
    el: '#app',
    components: {App}
});