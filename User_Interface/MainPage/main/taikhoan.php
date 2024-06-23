
<ul class="taikhoan">
    <li><h3>QUẢN LÝ TÀI KHOẢN</h3></li>
    <li><a href="index.php?quanli=info">Quản lí thông tin tài khoản</a></li>
    <li><a href="login.php">Đăng nhập</a></li>
    <li><a href="admincp/modules/login/logout.php">Đăng xuất</a></li>
    <li><?php if(isset($_GET['loged_in'])=='no'){ echo "Bạn chưa đăng nhập!";} ?></li>
</ul>