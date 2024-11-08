<template>
    <div class="container">
        <div class="login-form">
            <h2 class="text-center text-bold">ĐĂNG NHẬP</h2>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" placeholder="Mật khẩu" required>
                </div>
                <div class="mb-3 text-center">
                    <a href="#" class="text-decoration-none text-dark">Quên mật khẩu? Nhấn vào đây</a>
                </div>
                <button type="submit" class="btn btn-login w-100">Đăng nhập</button>
                <div class="text-center mt-3">
                    <router-link to="/register" class="text-decoration-none text-dark">Chưa có tài khoản? Đăng
                        ký</router-link>
                </div>
            </form>
        </div>
    </div>
</template>
<style>
.login-form {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.btn-login {
    background: #7fad39;
    color: #fff;
}

.btn-login:hover {
    background: #f0b429;
    color: #fff;
}

.text-dark:hover {
    color: #7fad39 !important;
}
</style>