<?php
    if(isset($_COOKIE['loged_in'])){
        
        $username = explode('.', base64_decode($_COOKIE['loged_in']))[1];
        $query = "SELECT * FROM khach_hang WHERE Username='$username'";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_array($result);
        ?>
        <ul class="taikhoan2">
            <li>
            <p class="change_suc"><?php
            if(isset($_GET['update'])=='success'){
                echo 'Thay đổi thông tin thành công!';
            }
            ?></p>
            </li>
            <li><h3>THÔNG TIN TÀI KHOẢN</h3></li>
            <li>1. Mã khách hàng: <?php echo $row['MaKH'] ?></li>
            <li>2. Tên khách hàng: <?php echo $row['TenKH'] ?></li>
            <li>3. Số điện thoại: <?php echo $row['SĐT'] ?></li>
            <li>4. Email: <?php echo $row['Email'] ?></li>
            <li>5. Địa chỉ: <?php echo $row['DiaChi'] ?></li>
            <li>6. Tên đăng nhập: <?php echo $row['Username'] ?></li>
            <br>
            <li><a href="index.php?quanli=change_info">Sửa thông tin</a></li>
            <li><a href="index.php?quanli=change_pass">Đổi mật khẩu</a></li>
            <li><a href="index.php?quanli=history">Xem lịch sử mua hàng</a></li>
        </ul>

        <?php
    }else{
        ?>
        <ul class="taikhoan">
            <li>Bạn chưa đăng nhập!<br><br><a href="login.php">Đăng nhập ngay</a></li>
        </ul>
        <?php
    }
?>

