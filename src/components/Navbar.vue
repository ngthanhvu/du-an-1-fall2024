<script>
export default {
  name: 'Navbar'
}
</script>
<template>
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="header__top__left">
              <ul>
                <li><font-awesome-icon icon="envelope" /> shoptraicay@traicay.vn</li>
                <li>Miễn phí vận chuyển cho hóa đơn từ 450k</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="header__top__right">
              <div class="header__top__right__social">
                <a href="#"><font-awesome-icon :icon="['fab', 'facebook']" /></a>
                <a href="#"><font-awesome-icon :icon="['fab', 'twitter']" /></a>
                <a href="#"><font-awesome-icon :icon="['fab', 'linkedin']" /></a>
                <a href="#"><font-awesome-icon :icon="['fab', 'pinterest-p']" /></a>
              </div>
              <div class="header__top__right__language">
                <img src="https://cdn.pixabay.com/photo/2012/04/10/23/04/vietnam-26834_640.png" alt=""
                  style="width: 20px;">
                <div>Tiếng Việt</div>
                <span class="carrot-down"></span>
                <ul>
                  <li><a href="#">Tiếng Việt</a></li>
                  <li><a href="#">English</a></li>
                </ul>
              </div>
              <div class="header__top__right__auth">
                <router-link to="/login"><font-awesome-icon :icon="['far', 'user']" />Đăng nhập</router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="header__logo">
            <router-link to="/"><img src="#" alt=""></router-link>
          </div>
        </div>
        <div class="col-lg-7">
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
              <li><router-link to="/about">Giới Thiệu</router-link></li>
              <li><router-link to="/blog">Tin Tức</router-link></li>
              <li><router-link to="/contact">Liên Hệ</router-link></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3">
          <div class="header__cart">
            <ul>
              <li><router-link to="/wishlist"><font-awesome-icon :icon="['far', 'heart']" class="cart-icon1" />
                  <span>1</span></router-link></li>
              <li><router-link to="/cart"> <font-awesome-icon :icon="['fas', 'cart-shopping']" class="cart-icon1" />
                  <span>3</span></router-link></li>
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
.cart-icon1 {
  color: #7fad39;
  /* Màu xanh */
  font-size: 20px;
  /* Tùy chọn điều chỉnh kích thước nếu cần */
}
</style>
