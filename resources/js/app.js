require('./bootstrap');

import store from "./store";
import router from "./router";

import App from './components/App'
import {createApp} from 'vue'


createApp(App).use(router).use(store).mount("#app")
