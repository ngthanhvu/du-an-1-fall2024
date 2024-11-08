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


const routes = [
  { path: '/', component: Home },
  { path: '/product', component: Product },
  { path: '/detail_product', component: Detail_product },
  { path: '/contact', component: Contact },
  { path: '/about', component: About },
  { path: '/blog', component: Blog },
  { path: '/login', component: Login },
  { path: '/register', component: Register },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
