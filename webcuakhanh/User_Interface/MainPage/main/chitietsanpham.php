<?php
    $masp = $_GET['masp'];
    $sql_chitiet = "SELECT * FROM sanpham WHERE masp='$masp'";
    $result = mysqli_query($mysqli, $sql_chitiet);
    $row = mysqli_fetch_array($result);
?>
<div class="anhchitiet">
    <h3>CHI TIẾT SẢN PHẨM</h3>
    <img width=90% height=90% src="admincp/modules/quanlisp/images/<?php echo $row['anh']; ?>">
</div>
<div class="thongtinchitiet">
    <h4>Tên sản phẩm: <?php echo $row['tensp']; ?></h4>
    <h4>Giá: <?php echo $row['gia']; ?></h4>
    <h4>Mô tả: <?php echo $row['mota']; ?></h4>
    <h4>Số lượng còn lại: <?php echo $row['soluong']; ?></h4>
    <hr>
    <a class="mua" href="/webcuakhanh/index.php?quanli=muahang&masp=<?php echo $_GET['masp'];?>&sl=<?php if(isset($_GET['sl'])){ echo $_GET['sl'];} ?>">Mua ngay</a><br>
    <h4>Thêm vào giỏ hàng</h4>
    <form action="admincp/modules/quanligiohang/qlgiohang.php?masp=<?php echo $_GET['masp'];?>" method="POST">
        Số lượng: <input type="number" name="soluong" value=<?php if(isset($_GET['sl'])){ echo $_GET['sl'];} ?>>
        <input type="submit" name="submit" value="Thêm">
    </form>
    <?php
        if(isset($_GET['them'])&&$_GET['them']=="success"){
            echo "Thêm thành công!";
        }elseif(isset($_GET['them'])&&$_GET['them']=="failed"){
            ?>
        <ul class="taikhoan">
            <li>Thêm thất bại! Bạn chưa đăng nhập!<br><br><a href="login.php">Đăng nhập ngay</a></li>
        </ul>
        <?php
        }
    ?>
</div>