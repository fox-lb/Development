<?php
    $lietke_hoadon = "SELECT * FROM hoa_don";
    $lietke_result = mysqli_query($mysqli, $lietke_hoadon);
?>

<div class="themsp">
    <p class="themdanhmuc">HÓA ĐƠN VÀ DOANH THU</p><hr>
    <table border="1px" width="100%">
        <tr>
            <th>ID</th>
            <th>Mã HĐ</th>
            <th>Mã KH</th>
            <th>Mã SP</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Tổng tiền</th>
            <th>Quản lí</th>
        </tr>
        <?php
            $i = 0;
            $sum =0;
            while ($row = mysqli_fetch_array($lietke_result)){
                $i++;
                $sum +=$row['Tong'];
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['MaHD']; ?></td>
                <td><?php echo $row['MaKH']; ?></td>
                <td><?php echo $row['MaSP']; ?></td>
                <td><?php echo $row['SoLuong']; ?></td>
                <td><?php echo $row['gia']; ?></td>
                <td><?php echo $row['Tong']; ?></td>
                <td>
                    <a href="modules/doanhthu/xoa.php?action=thongke&mahd=<?php echo $row['MaHD'] ?>">Xóa</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>

    <h3>TỔNG DOANH THU: <?php echo $sum.' đ'; ?></h3>
</div>
