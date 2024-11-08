<template>
    <div class="container">
        <div class="register-form">
            <h2 class="text-center text-bold">ĐĂNG KÝ</h2>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="phone" placeholder="Số điện thoại" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" placeholder="Mật khẩu" required>
                </div>
                <div class="mb-3">
                    <label for="confimPassword" class="form-label">Xác nhận mật khẩu <span
                            class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="confimPassword" placeholder="Xác nhận mật khẩu"
                        required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Đồng ý với điều khoản</label>
                </div>
                <button type="submit" class="btn btn-register w-100">Đăng ký</button>
                <div class="text-center mt-3">
                    <router-link to="/login" class="text-decoration-none text-dark">Đã có tài khoản? Đăng
                        nhập</router-link>
                </div>
            </form>
        </div>
    </div>
</template>
<style>
.register-form {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.btn-register {
    background: #7fad39;
    color: #fff;
}

.btn-register:hover {
    background: #f0b429;
    color: #fff;
}

.text-dark:hover {
    color: #7fad39 !important;
}
</style>