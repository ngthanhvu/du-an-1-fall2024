import { createRouter, createWebHistory } from 'vue-router';

// Import các component cho các route
import Home from '../components/Home.vue';
import Product from '../components/Product.vue';
import Detail_product from '../components/Detail_product.vue';
import Contact from '../components/Contact.vue';
import About from '../components/About.vue';
import Blog from '../components/Blog.vue';
import Login from '../components/Login.vue';
import Register from '../components/Register.vue';
import Cart from '../components/Cart.vue';
import Checkout from '../components/Checkout.vue';
import Profile from '../components/Profile.vue';

import AdminLayout from '../components/admin/AdminLayout.vue';
import AdminDashboard from '@/components/admin/AdminDashboard.vue';
import AdminProduct from '@/components/admin/AdminProduct.vue';

const routes = [
  { path: '/', component: Home , meta: { title: 'Home' }},
  { path: '/product', component: Product , meta: { title: 'Product' }},
  { path: '/detail_product', component: Detail_product , meta: { title: 'Detail_product' }},
  { path: '/contact', component: Contact , meta: { title: 'Contact' }},
  { path: '/about', component: About , meta: { title: 'About' }},
  { path: '/blog', component: Blog , meta: { title: 'Blog' }},
  { path: '/login', component: Login , meta: { title: 'Login' }},
  { path: '/register', component: Register , meta: { title: 'Register' }},
  { path: '/cart', component: Cart , meta: { title: 'Cart' }},
  { path: '/checkout', component: Checkout , meta: { title: 'Checkout' }},
  { path: '/profile', component: Profile , meta: { title: 'Profile' }},
  {
    path: '/admin',
    component: AdminLayout,
    children: [
      { path: '', component: AdminDashboard , meta: { title: 'Admin Dashboard' }},
      { path: '/admin/products', component: AdminProduct , meta: { title: 'Admin Product' }},
    ],
  }

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.beforeEach((to, from, next) => {
  document.title = `${to.meta.title} | Shop`;
  next();
});

export default router;