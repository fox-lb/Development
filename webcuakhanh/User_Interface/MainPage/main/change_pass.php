<div class="change_info">
        <h3>ĐỔI MẬT KHẨU</h3>
        <form class="registration-form" action="admincp/modules/khachhang/thongtintaikhoan/doimatkhau.php" method="POST">
            <div class="input-group">
                <label for="email">Mật khẩu cũ</label><br>
                <input type="text" id="email" name="old_pass" required>
            </div>
            <div class="input-group">
                <label for="name">Mật khẩu mới</label><br>
                <input type="text" id="name" name="new_pass" required>
            </div>
            <div class="input-group">
                <label for="phone">Xác nhận lại mật khẩu mới</label><br>
                <input type="text" id="phone" name="confirm" required>
            </div><br>
            <button class="submit" type="submit">Đổi mật khẩu</button>
        </form>
            <?php 
                if (isset($_GET['update']) && $_GET['update']=='faild'){ 
                    ?>
                    <ul class="taikhoan4">
                        <li>Bạn chưa đăng nhập!<br><br><a href="login.php">Đăng nhập ngay</a></li>
                    </ul>
                    <?php
                }elseif (isset($_GET['update']) && $_GET['update']=='miss'){
                    echo '<p>Vui lòng nhập đủ thông tin!</p>';
                }elseif(isset($_GET['update']) && $_GET['update']=='wrong'){
                    echo '<p>Mật khẩu cũ sai!</p>';
                }elseif(isset($_GET['update']) && $_GET['update']=='diff'){
                    echo '<p>Xác nhận mật khẩu mới sai!</p>';
                }else{

                }
            ?>
        
    </div>