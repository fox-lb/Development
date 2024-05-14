<?php
    $lietke_danhmucsp = "SELECT * FROM danhmucsp";
    $lietke_result = mysqli_query($mysqli, $lietke_danhmucsp);
?>

<div class="themsp">
    <p class="themdanhmuc">Các danh mục sản phẩm :</p><hr>
    <table border="1px" width="100%">
        <tr>
            <th>ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Mã Định Danh</th>
            <th>Quản lí</th>
        </tr>
        <?php
            $i = 0;
            while ($row = mysqli_fetch_array($lietke_result)){
                $i++;
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['tendanhmuc']; ?></td>
                <td><?php echo $row['thutu']; ?></td>
                <td>
                    <a href="index.php?action=suadanhmuc&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a> | <a href="modules/quanlidanhmucsp/xuli.php?action=xoadanhmuc&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>
