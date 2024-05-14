<?php
    $lietkesp = "SELECT * FROM sanpham, danhmucsp WHERE sanpham.madanhmuc = danhmucsp.thutu";
    $lietke_result = mysqli_query($mysqli, $lietkesp);
?>

<div class="themsp">
    <p class="themdanhmuc">Các sản phẩm :</p><hr>
    <table border="1px" width="100%">
        <tr>
            <th>ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Ảnh</th>
            <th>Tình trạng</th>
            <th>Quản lí</th>
        </tr>
        <?php
            $i = 0;
            while ($row = mysqli_fetch_array($lietke_result)){
                $i++;
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['tensp']; ?></td>
                <td><?php echo $row['gia']; ?></td>
                <td><?php echo $row['soluong']; ?></td>
                <td><?php echo $row['tendanhmuc']; ?></td>
                <td><?php echo $row['mota']; ?></td>
                <td><img src="modules/quanlisp/images/<?php echo $row['anh'];?>" alt="" width="170px"></td>
                <td><?php echo $row['tinhtrang']; ?></td>
                <td>
                    <a href="index.php?action=suasanpham&masp=<?php echo $row['masp'] ?>">Sửa</a> | <a href="modules/quanlisp/xuli.php?action=xoasanpham&masp=<?php echo $row['masp'] ?>">Xóa</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>
