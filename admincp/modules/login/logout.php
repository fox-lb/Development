<?php
// Bắt đầu hoặc khởi tạo một phiên
session_start();
if(isset($_COOKIE['loged_in'])){
    // Xóa hoặc hủy phiên đăng nhập của người dùng
    $_SESSION = array(); // Xóa tất cả các biến phiên
    session_destroy(); // Hủy bỏ phiên
    setcookie('loged_in','',time() - 3600, '/');

    // Chuyển hướng người dùng đến trang đăng nhập hoặc trang chính
    header("Location: /webcuakhanh/index.php");
    exit;
}else{
    header('location: /webcuakhanh/index.php?quanli=taikhoan&loged_in=no');
}
?>
