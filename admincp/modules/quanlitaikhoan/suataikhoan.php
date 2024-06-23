<?php
    $sua_taikhoan = "SELECT * FROM khach_hang WHERE MaKH='$_GET[makh]' LIMIT 1";
    $sua_result = mysqli_query($mysqli, $sua_taikhoan);
?>

<div class="themsp">
    <p class="themdanhmuc">SỬA THÔNG TIN TÀI KHOẢN KHÁCH HÀNG, MÃ KH: <?php $row = mysqli_fetch_array($sua_result); echo $row['MaKH'];  ?></p><hr>
    <form action="modules/quanlitaikhoan/xuli.php" method="POST" >
        <p>Tên khách hàng :</p>
        <input type="text" name="tenkh" value=<?php echo $row['TenKH'];  ?>>
        <p>Mã khách hàng :</p>
        <input type="text" name="makh" value=<?php echo $row['MaKH'];  ?>>
        <p>SĐT :</p>
        <input type="text" name="sdt" value=<?php echo $row['SĐT'];  ?>>
        <p>Email :</p>
        <input type="email" name="email" value=<?php echo $row['Email'];  ?>>
        <p>Địa chỉ :</p>
        <textarea id="address" name="diachi" rows="3" required></textarea>
        <input type="hidden" value=<?php echo $_GET['makh']; ?> name= "makh">
        <br><br>
        <input type="submit" name="suataikhoan" value="Sửa">
    </form>
</div>
