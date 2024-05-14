<?php

    if(isset($_COOKIE['loged_in'])){
        $username = explode('.', base64_decode($_COOKIE['loged_in']))[1];
        $query = "SELECT * FROM khach_hang WHERE Username='$username'";
        $result = mysqli_query($mysqli, $query);
        $salt ='khanh';
        $cookie = base64_encode(hash('sha256',$username.$salt).'.'.$username);

        if(isset($_GET['mua']) &&$_GET['mua']=='success' ){?>
            <h3 class= "h3ne">Đặt hàng thành công!</h3><?php
        }
        if (mysqli_num_rows($result)>0 && $cookie == $_COOKIE['loged_in']){
            $row = mysqli_fetch_array($result);
            $maKH = $row['MaKH'];
            $query_cart = "SELECT * from gio_hang, sanpham WHERE gio_hang.masp = sanpham.masp and gio_hang.MaKH ='$maKH'";
            $result_cart = mysqli_query($mysqli, $query_cart);
            if (mysqli_num_rows($result_cart)>0){
                ?>
                <h3 class='h3ne'>THÔNG TIN GIỎ HÀNG</h3>
                <ul class="giohang">
                    
                    <?php while($row1 = mysqli_fetch_array($result_cart)){ ?>
                        <li>
                            <p></p>
                            <a href="index.php?quanli=muahang&masp=<?php echo $row1['masp']; ?>&sl=<?php echo $row1['SoLuong'] ?>">
                                <img src="admincp/modules/quanlisp/images/<?php echo $row1['anh']; ?>" height=150px>
                                <p><?php echo $row1['tensp']?></p>
                                <p class="price"><?php echo $row1['gia'] ?>đ</p>
                                <p class="price">Số lượng: <?php echo $row1['SoLuong'] ?></p>
                            </a>
                            <form action="admincp/modules/quanligiohang/xoa.php" method="POST">

                                <input type="hidden" name="makh" value=<?php echo $maKH; ?>>
                                <input type="hidden" name="masp" value=<?php echo $row1['masp']; ?>>
                                <input type="submit" value="Xóa">
                            </form>
                    <?php } ?>
                </ul>
            <?php }else{
                ?>
                <ul class="taikhoan">
                    <li>Giỏ hàng trống!<br></li>
                </ul>
                <?php
            }
        }
    }else{
        ?>
        <ul class="taikhoan">
            <li>Bạn chưa đăng nhập!<br><br><a href="login.php">Đăng nhập ngay</a></li>
        </ul>
        <?php
    }
    ?>
