require('./bootstrap');
// require('./core/search')


import store from "./store";
// import router from "./router";

import  Document from './components/Document/index'
import files from './components/forms/files'
import InputText from './components/forms/input-text'

import {createApp} from 'vue'
const app = createApp({});

app.component('document', Document)
app.component('files', files)
app.component('input-text', InputText)

app.use(store).mount("#app")
