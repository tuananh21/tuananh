<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/login.css">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/reponsive.css">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/header.css">
    <link rel="stylesheet" href="http://localhost/demo2/app/asset/css/footer.css">
    <title>Document</title>
</head>
<body>
    <?php require_once "app/views/layouts/header.php" ?>
    <?php
        $error;
        if (isset($_REQUEST["error"])){
            $error = $_REQUEST["error"];
        }
    ?>
    <main>
        <div class="grid wide">
            <div class="container row">
                <div class="c-0 m-0 l-2"></div>
                <div class="c-0 m-0 l-8 col">
                    <div class="main_box">
                        <div class="login">
                            <div class="login_normal">
                                <h3>Đăng nhập tài khoản</h3>
                                <form action="http://localhost/demo2/user/login" method="POST">
                                    <label for="username">Username <span style="color: red;">*</span></label><br>
                                    <input type="text" name="username" placeholder="username">
                                    <label for="password">Mật khẩu <span style="color: red;">*</span></label><br>
                                    <input type="password" name="password" placeholder="password">
                                    <span style="color: red;"><?php echo isset($error) && $error == "true" ? "username or password not correct" : "" ?></span>
                                    <button type="submit" value="submit">Đăng nhập</button>
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
                            <a href="http://localhost/demo2/user/register">Đăng ký
                            </a>
                        </div>
                    </div>
                </div>
                <div class="c-0 m-0 l-2"></div>
                <div class="c-0 m-12 l-0 col">
                    <div class="main_box">
                        <div class="login">
                            <div class="login_normal">
                                <h3>Đăng nhập tài khoản</h3>
                                    <form action="#" method="get">
                                        <label for="email">Email <span style="color: red;">*</span></label><br>
                                        <input type="email" placeholder="Email" required><br>   
                                        <label for="password">Mật khẩu <span style="color: red;">*</span></label><br>
                                        <input type="password" placeholder="Mật khẩu" required><br>
                                        <button type="submit" value="Đăng nhập">Đăng nhập</button>
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
                            <a href="https://nhanam.vn/account/register">Đăng ký
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
                            <a href="https://nhanam.vn/account/register">Đăng ký
                            </a>
                        </div>
                        <div class="login">
                            <div class="login_normal">
                                <h3>Đăng nhập tài khoản</h3>
                                    <form action="#" method="get">
                                        <label for="email">Email <span style="color: red;">*</span></label><br>
                                        <input type="email" placeholder="Email" required><br>   
                                        <label for="password">Mật khẩu <span style="color: red;">*</span></label><br>
                                        <input type="password" placeholder="Mật khẩu" required><br>
                                        <button type="submit" value="Đăng nhập">Đăng nhập</button>
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