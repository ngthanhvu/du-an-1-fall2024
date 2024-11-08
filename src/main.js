import './assets/main.css';
import './assets/vip.css';
import './assets/base.css';

import { createApp } from 'vue';
import App from './App.vue';
import router from './router';

// Bootstrap
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// Font Awesome
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

// Import các icon
import { faPhone, faMapMarkerAlt, faEnvelope, faClock } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faTwitter, faLinkedin, faPinterestP } from '@fortawesome/free-brands-svg-icons';
import { faHeart, faUser } from '@fortawesome/free-regular-svg-icons';
import { faCartShopping } from '@fortawesome/free-solid-svg-icons';
// Thêm các icon vào thư viện
library.add(faPhone, faMapMarkerAlt, faEnvelope, faClock, faFacebook, faTwitter, faLinkedin, faPinterestP, faUser, faHeart, faCartShopping);

const app = createApp(App);

app.component('font-awesome-icon', FontAwesomeIcon);

app.use(router).mount('#app');
