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
            },
            children: [
                {
                    path: '/',
                    name: 'app.home'

                },
                {
                    path: '/products',
                    name: 'app.products'

                },
                {
                    path: '/dashboard',
                    name: 'app.dashboard',
                    component: Dashboard
                }
            ]
        },

        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: {
                requiresGuest: true
            }
        },
        {
            path: '/requestPassword',
            name: 'requestPassword',
            component: RequestPassword,
            meta: {
                requiresGuest: true
            }
        },
        {
            path: '/resetPassword/:token',
            name: 'resetPassword',
            component: ResetPassword,
            meta: {
                requiresGuest: true
            }
        },
        {
            path: '/:pathMatch(.*)'
        }

    ]
})

export default router
