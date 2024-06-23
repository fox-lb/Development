<?php
    $lietke_taikhoan = "SELECT * FROM khach_hang";
    $lietke_result = mysqli_query($mysqli, $lietke_taikhoan);
?>

<div class="themsp">
    <p class="themdanhmuc">DANH SÁCH TÀI KHOẢN KHÁCH HÀNG</p><hr>
    <table border="1px" width="100%">
        <tr>
            <th>ID</th>
            <th>Mã KH</th>
            <th>Tên KH</th>
            <th>SĐT</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Quản lí</th>
        </tr>
        <?php
            $i = 0;
            while ($row = mysqli_fetch_array($lietke_result)){
                $i++;
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['MaKH']; ?></td>
                <td><?php echo $row['TenKH']; ?></td>
                <td><?php echo $row['SĐT']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['DiaChi']; ?></td>
                <td>
                    <a href="index.php?action=suataikhoan&makh=<?php echo $row['MaKH'] ?>">Sửa</a> | <a href="modules/quanlitaikhoan/xuli.php?action=xoataikhoan&makh=<?php echo $row['MaKH'] ?>">Xóa</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>
