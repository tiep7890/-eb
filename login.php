<?php
// Bắt đầu session để có thể lưu trạng thái đăng nhập
session_start();

// Giả lập dữ liệu người dùng đúng. Trong thực tế, bạn sẽ truy vấn cơ sở dữ liệu.
$correct_email = 'test@gmail.com';
$correct_password = '123'; // Trong thực tế, mật khẩu phải được mã hóa

// Chỉ xử lý khi người dùng gửi form (phương thức POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kiểm tra thông tin
    if ($email === $correct_email && $password === $correct_password) {
        // Nếu đúng, lưu thông tin vào session và báo thành công
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        echo "<h1>Đăng nhập thành công! Chào mừng, " . htmlspecialchars($email) . "</h1>";
        // Trong thực tế, bạn có thể chuyển hướng họ đến trang chính:
        // header("Location: /trang-quan-tri.php");
    } else {
        // Nếu sai, báo lỗi
        echo "<h1>Sai email hoặc mật khẩu. Vui lòng <a href='index.php'>thử lại</a>.</h1>";
    }
} else {
    // Nếu ai đó cố gắng truy cập trực tiếp file này, chuyển hướng về trang chủ
    header("Location: index.php");
    exit();
}
?>
