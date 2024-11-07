<script>
const name = 'Navbar';
</script>

<template>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> shoptraicay@traicay.vn</li>
                                <li>Miễn phí vận chuyển cho hóa đơn từ 450k</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="https://cdn.pixabay.com/photo/2012/04/10/23/04/vietnam-26834_640.png" alt=""
                                    style="width: 20px;">
                                <div>Tiếng Việt</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Đăng Nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <router-link to="/"><img src="#" alt=""></router-link>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><router-link to="/">Trang Chủ</router-link></li>
                            <li>
                                <router-link to="/product">Sản Phẩm</router-link>
                                <ul class="header__menu__dropdown">
                                    <li><router-link to="/shop-details">Shop Details</router-link></li>
                                    <li><router-link to="/shoping-cart">Shoping Cart</router-link></li>
                                    <li><router-link to="/checkout">Check Out</router-link></li>
                                    <li><router-link to="/blog-details">Blog Details</router-link></li>
                                </ul>
                            </li>
                            <li><router-link to="/blog">Tin Tức</router-link></li>
                            <li><router-link to="/contact">Liên Hệ</router-link></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><router-link to="/wishlist"><i class="fa fa-heart"></i> <span>1</span></router-link></li>
                            <li><router-link to="/cart"><i class="fa fa-shopping-bag"></i> <span>3</span></router-link></li>
                        </ul>
                        <div class="header__cart__price">Giỏ Hàng: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
</template>

<style scoped>
/* CSS tùy chỉnh */
</style>
