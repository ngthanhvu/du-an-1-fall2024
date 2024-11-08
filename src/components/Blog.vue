<template>
   <!-- Breadcrumb Section Begin -->
   <section class="breadcrumb-section"
        :style="{ backgroundImage: 'url(https://img.tripi.vn/cdn-cgi/image/width=700,height=700/https://gcs.tripi.vn/public-tripi/tripi-feed/img/474118Ogs/background-cac-loai-trai-cay_044210936.jpg)' }">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <router-link to="/">Trang Chủ</router-link>
                            <router-link to="/product">Tin Tức</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
  
</template>

<script>
export default {
  name: 'Blog'
}
</script>
