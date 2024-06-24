<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/login.css">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/reponsive.css">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/header.css">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/footer.css">
    <script src="http://localhost/demo2/app/asset/js/validate.js" defer></script>
    <title>Register User</title>
</head>
<body>
    <?php require_once "app/views/layouts/header.php" ?>
    <main>
        <div class="grid wide">
            <div class="container row">
                <div class="c-0 m-0 l-2"></div>
                <div class="c-0 m-0 l-8 col">
                    <div class="main_box">
                        <div class="login">
                            <div class="login_normal">
                                <h3>Đăng ký tài khoản</h3>
                                <form id="registerForm" action="http://localhost/demo2/user/register" method="POST" onsubmit="return validateRegister()">
                                    <label for="username">Username<span style="color: red;">*</span></label><br>
                                    <input type="text" id="username" name="username" oninput="removeError('username')" required><br>
                                    <span id="nameError" style="color: red;"></span><br>

                                    <label for="password">Password<span style="color: red;">*</span></label><br>
                                    <input type="password" id="password" name="password" oninput="removeError('password')" required><br>
                                    <span id="passwordError" style="color: red;"></span><br>

                                    <label for="phone">Phone<span style="color: red;">*</span></label><br>
                                    <input type="number" id="phone" name="phone" oninput="removeError('phone')" required><br>
                                    <span id="phoneError" style="color: red;"></span><br>

                                    <button type="submit" value="Register">Đăng ký</button>
                                </form>
                                <div class="login_alt">
                                    <p>Hoặc đăng nhập bằng</p>
                                    <a href="abc">
                                        <img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg">
                                    </a>
                                    <a href="abc">
                                        <img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg">
                                    </a>
                                </div>
                                <div class="forget_password">
                                    Bạn quên mật khẩu? Bấm <a href="#" style="color: blue;text-decoration: underline;" onclick="PasswordRecovery()">vào đây</a>
                                </div>
                            </div>
                            <div class="login_passwordrecovery">
                                <h3>Quên mật khẩu</h3>
                                <p>Chúng tôi sẽ gửi cho bạn một email để kích hoạt việc đặt lại mật khẩu.</p>
                                <form action="#" method="get">
                                    <label for="email"></label>
                                    <input type="email" placeholder="Email" required><br>
                                    <button type="submit" href="#">Gửi yêu cầu</button>
                                    <a href="#" onclick="PasswordRecovery()">Hủy</a>
                                </form>
                            </div>
                        </div>
                        <div class="member_benefit">
                            <h3>Quyền lợi với thành viên</h3>
                            <div>
                                <p>Vận chuyển siêu tốc</p>
                                <p>Sản phẩm đa dạng</p>
                                <p>Đổi trả dễ dàng</p>
                                <p>Tích điểm đổi quà</p>
                                <p>Được giảm giá cho lần mua tiếp theo lên đến 10%</p>
                            </div>
                            <a href="../html/login.html">Đăng nhập
                            </a>
                        </div>
                    </div>
                </div>
                <div class="c-0 m-0 l-2"></div>
                <div class="c-0 m-12 l-0 col">
                    <div class="main_box">
                        <div class="login">
                            <div class="login_normal">
                                <h3>Đăng ký tài khoản</h3>
                                    <form action="http://localhost/demo2/user/register" method="POST">
                                        <label for="username">Username<span style="color: red;">*</span></label><br>
                                        <input type="text" placeholder="Username" required><br>    
                                        <label for="password">Password<span style="color: red;">*</span></label><br>
                                        <input type="password" placeholder="Password" required><br>   
                                        <label for="Phone">Phone <span style="color: red;">*</span></label><br>
                                        <input type="number" placeholder="Phone" required><br>   
                                        <button type="submit" value="Register">Đăng ký</button>
                                    </form>
                                <div class="login_alt">
                                    <p>Hoặc đăng nhập bằng</p>
                                    <a href="abc">
                                        <img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg">
                                    </a>
                                    <a href="abc">
                                        <img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg">
                                    </a>
                                </div>
                                <div class="forget_password">
                                    Bạn quên mật khẩu? Bấm <a href="#" style="color: blue;text-decoration: underline;" onclick="PasswordRecovery()">vào đây</a>
                                </div>
                            </div>
                            <div class="login_passwordrecovery">
                                <h3>Quên mật khẩu</h3>
                                <p>Chúng tôi sẽ gửi cho bạn một email để kích hoạt việc đặt lại mật khẩu.</p>
                                <form action="#" method="get">
                                    <label for="email"></label>
                                    <input type="email" placeholder="Email" required><br>
                                    <button type="submit" href="#">Gửi yêu cầu</button>
                                    <a href="#" onclick="PasswordRecovery()">Hủy</a>
                                </form>
                            </div>
                        </div>
                        <div class="member_benefit">
                            <h3>Quyền lợi với thành viên</h3>
                            <div>
                                <p>Vận chuyển siêu tốc</p>
                                <p>Sản phẩm đa dạng</p>
                                <p>Đổi trả dễ dàng</p>
                                <p>Tích điểm đổi quà</p>
                                <p>Được giảm giá cho lần mua tiếp theo lên đến 10%</p>
                            </div>
                            <a href="../html/login.html">Đăng nhập
                            </a>
                        </div>
                    </div>
                </div>
                <div class="c-12 m-0 l-0">
                    <div class="main_box">
                        <div class="member_benefit">
                            <h3>Quyền lợi với thành viên</h3>
                            <div>
                                <p>Vận chuyển siêu tốc</p>
                                <p>Sản phẩm đa dạng</p>
                                <p>Đổi trả dễ dàng</p>
                                <p>Tích điểm đổi quà</p>
                                <p>Được giảm giá cho lần mua tiếp theo lên đến 10%</p>
                            </div>
                            <a href="../html/login.html">Đăng nhập
                            </a>
                        </div>
                        <div class="login">
                            <div class="login_normal">
                                <h3>Đăng ký tài khoản</h3>
                                    <form action="http://localhost/demo2/user/register" method="POST">
                                        <label for="username">Username<span style="color: red;">*</span></label><br>
                                        <input type="text" placeholder="Username" required><br>    
                                        <label for="password">Password<span style="color: red;">*</span></label><br>
                                        <input type="password" placeholder="Password" required><br>   
                                        <label for="Phone">Phone <span style="color: red;">*</span></label><br>
                                        <input type="number" placeholder="Phone" required><br>   
                                        <button type="submit" value="Register">Đăng ký</button>
                                    </form>
                                <div class="login_alt">
                                    <p>Hoặc đăng nhập bằng</p>
                                    <a href="abc">
                                        <img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg">
                                    </a>
                                    <a href="abc">
                                        <img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg">
                                    </a>
                                </div>
                                <div class="forget_password">
                                    Bạn quên mật khẩu? Bấm <a href="#" style="color: blue;text-decoration: underline;" onclick="PasswordRecovery()">vào đây</a>
                                </div>
                            </div>
                            <div class="login_passwordrecovery">
                                <h3>Quên mật khẩu</h3>
                                <p>Chúng tôi sẽ gửi cho bạn một email để kích hoạt việc đặt lại mật khẩu.</p>
                                <form action="#" method="get">
                                    <label for="email"></label>
                                    <input type="email" placeholder="Email" required><br>
                                    <button type="submit" href="#">Gửi yêu cầu</button>
                                    <a href="#" onclick="PasswordRecovery()">Hủy</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <?php require_once "app/views/layouts/footer.php" ?>
    <script src="https://kit.fontawesome.com/453b49545e.js" crossorigin="anonymous"></script>
</body>
</html>


