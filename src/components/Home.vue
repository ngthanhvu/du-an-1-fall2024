<template>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all" @click="toggleCategories">
                            <i class="fa fa-bars"></i>
                            <span>DANH MỤC</span>
                        </div>
                        <ul v-if="categoriesVisible">
                            <li><router-link to="/imported-fruits">TRÁI CÂY NHẬP KHẨU</router-link></li>
                            <li><router-link to="/vietnamese-fruits">TRÁI CÂY VIỆT NAM</router-link></li>
                            <li><router-link to="/fruit-baskets">GIỎ TRÁI CÂY</router-link></li>
                            <li><router-link to="/fruit-juices">NƯỚC ÉP TRÁI CÂY</router-link></li>
                            <li><router-link to="/dried-fruits">TRÁI CÂY SẤY KHÔ</router-link></li>
                            <li><router-link to="/fruit-jelly">THẠCH RAU CÂU TRÁI CÂY</router-link></li>
                            <li><router-link to="/fruit-milk">SỮA TRÁI CÂY</router-link></li>
                            <li><router-link to="/fruit-cereal">NGŨ CỐC TRÁI CÂY</router-link></li>
                            <li><router-link to="/fruit-yogurt">SỮA CHUA TRÁI CÂY</router-link></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Tất cả
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Bạn đang tìm kiếm.....">
                                <button type="submit" class="site-btn">TÌM KIẾM</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                              <font-awesome-icon icon="phone" class="icon-green" />
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>Hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item"
                        style="background-image: url('https://i.ytimg.com/vi/wrOdcwFsDgg/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLA5iogGH727MZRai47BnW-qFavhzw');">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <router-link to="/shop" class="primary-btn">SHOP NOW</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <section class="categories" v-if="categoriesVisible">
        <div class="container">
            <div class="row">
                <!-- Swiper Container -->
                <Swiper :slidesPerView="4" :spaceBetween="10" loop navigation pagination :breakpoints="breakpoints">
                    <SwiperSlide>
                        <div class="categories__item">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Fresh Fruit" class="set-bg" />
                                <h5><router-link to="/detail_product">Fresh Fruit 1</router-link></h5>
                            </div>

                    </SwiperSlide>
                    <SwiperSlide>
                        <div class="categories__item">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Fresh Fruit" class="set-bg" />
                            <h5><a href="#">Fresh Fruit 2</a></h5>
                        </div>

                    </SwiperSlide>
                    <SwiperSlide>
                        <div class="categories__item">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Fresh Fruit" class="set-bg" />
                            <h5><a href="#">Fresh Fruit 3</a></h5>
                        </div>

                    </SwiperSlide>
                    <SwiperSlide>
                        <div class="categories__item">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Fresh Fruit" class="set-bg" />
                            <h5><a href="#">Fresh Fruit 4</a></h5>
                        </div>

                    </SwiperSlide>
                    <SwiperSlide>
                        <div class="categories__item">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Fresh Fruit" class="set-bg" />
                            <h5><a href="#">Fresh Fruit 5</a></h5>
                        </div>
                    </SwiperSlide>
                </Swiper>
            </div>
        </div>
    </section>

    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM NỔI BẬT</h2>
                    </div>

                </div>
            </div>
            <div class="row featured__filter">
                <!-- sản phẩm 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Product Image" />
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><router-link to="/detail_product "><i class="fa fa-shopping-cart"></i></router-link></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><router-link to="/detail_product ">Crab Pool Security</router-link></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <!-- sản phẩm 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Product Image" />
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><router-link to="/detail_product "><i class="fa fa-shopping-cart"></i></router-link></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><router-link to="/detail_product ">Crab Pool Security</router-link></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM GIẢM GIÁ</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <!-- sản phẩm 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Product Image" />
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><router-link to="/detail_product "><i class="fa fa-shopping-cart"></i></router-link></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><router-link to="/detail_product ">Crab Pool Security</router-link></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <!-- sản phẩm 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Product Image" />
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><router-link to="/detail_product "><i class="fa fa-shopping-cart"></i></router-link></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><router-link to="/detail_product ">Crab Pool Security</router-link></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="https://file.hstatic.net/1000301274/file/gdn11302023_trai_cay_hcm1080x460_2be29487ba83495fa075e05514e3b326_grande.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="https://file.hstatic.net/200000338811/collection/cover_0d0072ec6023468baab39293100458b3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <section class="categories py-5" v-if="categoriesVisible">
        <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM ƯA CHUỘNG</h2>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <!-- Swiper Container -->
                <Swiper :slidesPerView="4" :spaceBetween="10" loop navigation pagination :breakpoints="breakpoints">
                    <SwiperSlide>
                    <div class="featured__item">
                        <div class="featured__item__pic">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Product Image" />
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><router-link to="/detail_product "><i class="fa fa-shopping-cart"></i></router-link></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><router-link to="/detail_product ">Crab Pool Security</router-link></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                    </SwiperSlide>
                    <SwiperSlide>
                        <div class="featured__item">
                        <div class="featured__item__pic">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Product Image" />
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><router-link to="/detail_product "><i class="fa fa-shopping-cart"></i></router-link></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><router-link to="/detail_product ">Crab Pool Security</router-link></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>

                    </SwiperSlide>
                    <SwiperSlide>
                        <div class="featured__item">
                        <div class="featured__item__pic">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Product Image" />
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><router-link to="/detail_product "><i class="fa fa-shopping-cart"></i></router-link></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><router-link to="/detail_product ">Crab Pool Security</router-link></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>

                    </SwiperSlide>
                    <SwiperSlide>
                        <div class="featured__item">
                        <div class="featured__item__pic">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Product Image" />
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><router-link to="/detail_product "><i class="fa fa-shopping-cart"></i></router-link></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><router-link to="/detail_product ">Crab Pool Security</router-link></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>

                    </SwiperSlide>
                    <SwiperSlide>
                        <div class="featured__item">
                        <div class="featured__item__pic">
                            <img src="https://traicaynhapkhausach.vn/upload/sanpham/large/buoi-da-xanh-loai-1-002-89-0.jpg"
                                alt="Product Image" />
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><router-link to="/detail_product "><i class="fa fa-shopping-cart"></i></router-link></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><router-link to="/detail_product ">Crab Pool Security</router-link></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                    </SwiperSlide>
                </Swiper>
            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>TIN TỨC VỀ TRÁI CÂY</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://cdn.shopify.com/s/files/1/0655/1755/1850/files/Benh-than-thu-tren-xoai-do-nam-1_480x480.jpg?v=1677055240" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Trái cây thối đéo nên ăn</a></h5>
                            <p>Nghe nói ăn trái cây thối dẫn đến đau bụng </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://cdn.shopify.com/s/files/1/0655/1755/1850/files/Benh-than-thu-tren-xoai-do-nam-1_480x480.jpg?v=1677055240" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Trái cây thối đéo nên ăn</a></h5>
                            <p>Nghe nói ăn trái cây thối dẫn đến đau bụng </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://cdn.shopify.com/s/files/1/0655/1755/1850/files/Benh-than-thu-tren-xoai-do-nam-1_480x480.jpg?v=1677055240" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Trái cây thối đéo nên ăn</a></h5>
                            <p>Nghe nói ăn trái cây thối dẫn đến đau bụng </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
// Import Swiper và SwiperSlide
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/swiper-bundle.css';

export default {
    name: 'Home',

    data() {
        return {
            categoriesVisible: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                600: {
                    slidesPerView: 2,
                },
                1000: {
                    slidesPerView: 4,
                },
            },
        };
    },
    methods: {
        toggleCategories() {
            this.categoriesVisible = !this.categoriesVisible;
        },
    },
    components: {
        Swiper,
        SwiperSlide,
    },
};
</script>

<style scoped>
.hero__categories ul a {
    text-decoration: none;
    color: inherit;
}

.hero__categories__all {
    cursor: pointer;
}

.categories__slider {
    width: 100%;
    height: auto;
}

.categories__item img {
    width: 50%;
    height: auto;
    object-fit: cover;
    margin: 0 auto;
    display: block;
}


.categories__item h5 a {
    text-decoration: none;
    color: rgb(0, 0, 0);
}
.featured__item__pic img {
    width: 100%;
    max-width: 200px;
    height: auto;
    object-fit: cover;
    margin: 0 auto;
    display: block;
}

</style>
