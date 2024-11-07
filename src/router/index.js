import { createRouter, createWebHistory } from 'vue-router';

// Import các component cho các route
import Home from '../components/Home.vue';
import Product from '../components/Product.vue';
import Detail_product from '../components/Detail_product.vue';


const routes = [
  { path: '/', component: Home },        
  { path: '/product', component: Product },
  { path: '/detail_product', component: Detail_product },
];

const router = createRouter({
  history: createWebHistory(),  
  routes,  
});

export default router;
