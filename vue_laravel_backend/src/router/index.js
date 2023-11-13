import { createRouter, createWebHistory } from 'vue-router'
import RequestPassword from '../views/RequestPassword.vue'
import ResetPassword from '../views/ResetPassword.vue'
import Dashboard from '../views/Dashboard.vue';
import Login from '../views/Login.vue'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/app',
            name: 'app',
            component: AppLayout,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/',
            name: 'home'

        },
        {
            path: '/about',
            name: 'about'

        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/requestPassword',
            name: 'requestPassword',
            component: RequestPassword
        },
        {
            path: '/resetPassword',
            name: 'resetPassword',
            component: ResetPassword
        }
    ]
})

export default router
