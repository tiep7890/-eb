<?php
// Chỉ xử lý khi người dùng gửi form (phương thức POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu và làm sạch để tránh tấn công XSS
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password']; // Cần mã hóa mật khẩu này trước khi lưu

    /*
    --- PHẦN LƯU VÀO CƠ SỞ DỮ LIỆU SẼ Ở ĐÂY ---
    Trong một dự án thực tế, bạn sẽ:
    1. Kết nối tới cơ sở dữ liệu.
    2. Mã hóa mật khẩu: $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    3. Tạo câu lệnh SQL để chèn dữ liệu mới:
       $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    4. Sử dụng Prepared Statements để thực thi câu lệnh một cách an toàn.
    */

    // Tạm thời chỉ hiển thị thông báo để xác nhận dữ liệu đã được gửi đi
    echo "<h1>Đăng ký thành công!</h1>";
    echo "<p>Tên: " . $name . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Cảm ơn bạn đã đăng ký. Bây giờ bạn có thể <a href='index.php'>đăng nhập</a>.</p>";

} else {
    // Nếu ai đó cố gắng truy cập trực tiếp file này, chuyển hướng về trang chủ
    header("Location: index.php");
    exit();
}
?>
