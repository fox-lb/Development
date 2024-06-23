<?php
    $masp = $_GET['masp'];
    $sql_chitiet = "SELECT * FROM sanpham WHERE masp='$masp'";
    $result = mysqli_query($mysqli, $sql_chitiet);
    $row = mysqli_fetch_array($result);

    if(isset($_COOKIE['loged_in'])){
        $username = explode('.', base64_decode($_COOKIE['loged_in']))[1];
        $query = "SELECT * FROM khach_hang WHERE Username='$username'";
        $result1 = mysqli_query($mysqli, $query);
        $salt ='khanh';
        $cookie = base64_encode(hash('sha256',$username.$salt).'.'.$username);
        if (mysqli_num_rows($result1)>0 && $cookie == $_COOKIE['loged_in']){
            $row1 = mysqli_fetch_array($result1);
            $maKH = $row1['MaKH'];
            ?>
            <div class="anhchitiet">
                <h3>ĐẶT HÀNG</h3>
                <img width=90% height=90% src="admincp/modules/quanlisp/images/<?php echo $row['anh']; ?>">
            </div>
            <div class="thongtinchitiet">
                <h4>Tên sản phẩm: <?php echo $row['tensp']; ?></h4>
                <h4>Giá: <?php echo $row['gia'].'đ'; ?></h4>
                <h4>Số lượng:</h4>
                
                <hr>
                <form action="admincp/modules/muahang/muahang.php" method="POST">
                    <input type="number" value=<?php echo $_GET['sl']; ?> name="sl">
                    <input type="hidden" value=<?php echo $_GET['masp']; ?> name="masp">
                    <input type="hidden" value=<?php echo $row1['MaKH']; ?> name="makh">
                    <input type="hidden" value=<?php echo $row['gia']; ?> name="gia">
                    <br>
                    <p>Lưu ý cho người bán</p>
                    <textarea name="message"></textarea>
                    <button class="taikhoan5" type="submit">Đặt hàng</button>
                </form>

            </div>
            <?php
            
        }

        if(isset($_GET['mua']) &&$_GET['mua']=='outofst'){
            ?>
            <h4 class="notify">Mặt hàng này không còn đủ số lượng yêu cầu!</h4>
            <?php
        }else{

        }
    }else{
        ?>
        <ul class="taikhoan">
            <li>Bạn chưa đăng nhập!<br><br><a href="login.php">Đăng nhập ngay</a></li>
        </ul>
        <?php
    }
?>
