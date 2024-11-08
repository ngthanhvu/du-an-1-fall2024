<template>
  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section" :style="{ backgroundImage: 'url(https://img.tripi.vn/cdn-cgi/image/width=700,height=700/https://gcs.tripi.vn/public-tripi/tripi-feed/img/474118Ogs/background-cac-loai-trai-cay_044210936.jpg)' }">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="breadcrumb__text">
            <h2>Organi Shop</h2>
            <div class="breadcrumb__option">
              <a href="./index.html">Home</a>
              <span>Shop</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Product Section Begin -->
  <section class="product spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-5">
          <div class="sidebar">
            <div class="sidebar__item">
              <h4>Danh Mục</h4>
              <ul>
                <li><a href="#">Fresh Meat</a></li>
                <li><a href="#">Vegetables</a></li>
                <li><a href="#">Fruit & Nut Gifts</a></li>
                <li><a href="#">Fresh Berries</a></li>
                <li><a href="#">Ocean Foods</a></li>
                <li><a href="#">Butter & Eggs</a></li>
                <li><a href="#">Fastfood</a></li>
                <li><a href="#">Fresh Onion</a></li>
                <li><a href="#">Papayaya & Crisps</a></li>
                <li><a href="#">Oatmeal</a></li>
              </ul>
            </div>
            <div class="sidebar__item">
              <h4>Giá</h4>
              <div class="price-checkbox-wrap">
                <label>
                  <input type="checkbox" name="price-range" value="10-50">
                  $10 - $50
                </label><br>
                <label>
                  <input type="checkbox" name="price-range" value="51-100">
                  $51 - $100
                </label><br>
                <label>
                  <input type="checkbox" name="price-range" value="101-200">
                  $101 - $200
                </label><br>
                <label>
                  <input type="checkbox" name="price-range" value="201-300">
                  $201 - $300
                </label><br>
                <label>
                  <input type="checkbox" name="price-range" value="301-400">
                  $301 - $400
                </label><br>
                <label>
                  <input type="checkbox" name="price-range" value="401-540">
                  $401 - $540
                </label><br>
              </div>
            </div>

            <div class="sidebar__item">
              <h4>Kích Cỡ</h4>
              <div class="sidebar__item__size">
                <label for="large">
                  Large
                  <input type="radio" id="large">
                </label>
              </div>
              <div class="sidebar__item__size">
                <label for="medium">
                  Medium
                  <input type="radio" id="medium">
                </label>
              </div>
              <div class="sidebar__item__size">
                <label for="small">
                  Small
                  <input type="radio" id="small">
                </label>
              </div>
              <div class="sidebar__item__size">
                <label for="tiny">
                  Tiny
                  <input type="radio" id="tiny">
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-7">

          <div class="filter__item">
            <div class="row">
              <div class="col-lg-4 col-md-5">
                <div class="filter__sort">
                  <span>Sort By</span>
                  <select>
                    <option value="0">Default</option>
                    <option value="0">Default</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="filter__found">
                  <h6><span>16</span> Products found</h6>
                </div>
              </div>
              <div class="col-lg-4 col-md-3">
                <div class="filter__option">
                  <span class="icon_grid-2x2"></span>
                  <span class="icon_ul"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="product__item">
                <div class="product__item__pic set-bg">
                  <img
                    src="https://cdn.shopify.com/s/files/1/0655/1755/1850/files/Benh-than-thu-tren-xoai-do-nam-1_480x480.jpg?v=1677055240"
                    alt="">
                  <ul class="product__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="product__item__text">
                  <h6><a href="#">Crab Pool Security</a></h6>
                  <h5>$30.00</h5>
                </div>
              </div>
            </div>


          </div>
          <div class="product__pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Product'
};
</script>
