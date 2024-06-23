<?php
    if(isset($_COOKIE['loged_in'])){
        
        $username = explode('.', base64_decode($_COOKIE['loged_in']))[1];
        $query = "SELECT * FROM khach_hang WHERE Username='$username' LIMIT 1";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_array($result);
        $makh = $row['MaKH'];

        $query1 = "SELECT * FROM purchase_history WHERE MaKH = '$makh'";
        $result1 = mysqli_query($mysqli, $query1);
        ?>

        <h3>LỊCH SỬ MUA HÀNG</h3>
        <table border="1px" width="100%">
        <tr>
            <th>Mã HD</th>
            <th>Tên SP</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Lưu ý cho người bán</th>
        </tr>
        <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result1)){
                $i++;
        ?>
            <tr>
                <td><?php echo $row['MaHD']; ?></td>
                <td><?php echo $row['TenSP']; ?></td>
                <td><?php echo $row['SoLuong']; ?></td>
                <td><?php echo $row['TongTien']; ?></td>
                <td><?php echo $row['Message']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>



        <?php
    }else{
        ?>
        <ul class="taikhoan">
            <li>Bạn chưa đăng nhập!<br><br><a href="login.php">Đăng nhập ngay</a></li>
        </ul>
        <?php
    }
?>

