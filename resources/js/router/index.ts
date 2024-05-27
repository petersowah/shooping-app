import { createRouter, createWebHistory, type RouteRecordRaw } from 'vue-router'

const routes: RouteRecordRaw[] = [
  {
    path: '/',
    name: 'home',
    component: () => import('../views/HomePage.vue'),
  },
  {
    path: '/product/:id',
    name: 'product',
    component: () => import('../views/ProductPage.vue'),
  },
  {
    path: '/invoices',
    name: 'invoices',
    component: () => import('../views/InvoiceListingPage.vue'),
  },
  {
    path: '/invoice/:id',
    name: 'invoice',
    component: () => import('../views/InvoiceDetailsPage.vue'),
  },
  {
    path: '/cart',
    name: 'cart',
    component: () => import('../views/CartPage.vue'),
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'not-found',
    component: () => import('../views/NotFoundPage.vue'),
  }
]

const router = createRouter({
  history: createWebHistory(import.meta.env.VITE_BASE_URL),
  routes,
  scrollBehavior: () => ({ top: 0 }),
})

export default router
