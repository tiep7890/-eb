<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Nhập & Đăng Ký</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="register.php" method="POST">
            <h1>Tạo Tài Khoản</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>hoặc dùng email của bạn để đăng ký</span>
            <input type="text" name="name" placeholder="Họ và Tên" required />
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Mật khẩu" required />
            <button type="submit">Đăng Ký</button>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form action="login.php" method="POST">
            <h1>Đăng Nhập</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>hoặc sử dụng tài khoản của bạn</span>
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Mật khẩu" required />
            <a href="#">Quên mật khẩu?</a>
            <button type="submit">Đăng Nhập</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Chào Mừng Trở Lại!</h1>
                <p>Để tiếp tục kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin của bạn</p>
                <button class="ghost" id="signIn">Đăng Nhập</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Xin Chào!</h1>
                <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình cùng chúng tôi</p>
                <button class="ghost" id="signUp">Đăng Ký</button>
            </div>
        </div>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>
