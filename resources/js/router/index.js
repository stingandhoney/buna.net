import {createRouter, createWebHistory} from 'vue-router'
import Document from "../components/Document/index";

const routes = [
    {
        path: '/document',
        name: 'Document',
        component: Document
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes: routes
})

export default router
