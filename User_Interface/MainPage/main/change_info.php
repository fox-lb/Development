<div class="change_info">
        <h3>THAY ĐỔI THÔNG TIN CÁ NHÂN</h3>
        <form class="registration-form" action="admincp/modules/khachhang/thongtintaikhoan/thongtintaikhoan.php" method="POST">
            <div class="input-group">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="name">Tên</label><br>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="phone">Số điện thoại</label><br>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="input-group">
                <label for="address">Địa chỉ</label><br>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>
            <br>
            <button class="submit" type="submit">Lưu</button>
            <?php if (isset($_GET['update'])=='faild'){ echo '<p>Bạn chưa đăng nhập!</p><br><a href="login.php">Đăng nhập ngay</a>';} ?>
        </form>
    </div>