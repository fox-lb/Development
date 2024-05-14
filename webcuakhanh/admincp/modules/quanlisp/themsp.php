<div class="themsp">
    <p class="themdanhmuc">Thêm sản phẩm</p><hr>
    <form action="modules/quanlisp/xuli.php" method="POST" enctype="multipart/form-data" >
        <p>Tên sản phẩm :</p>
        <input type="text" name="tensp">
        <p>Mã sản phẩm :</p>
        <input type="text" name="masp">
        <p>Danh mục :</p>
        <?php 
            $query = "SELECT * FROM danhmucsp";
            $select = mysqli_query($mysqli,$query);
            $i=1;
        ?>
        <select name="madanhmuc" >
            <?php while($row2 = mysqli_fetch_array($select)){?>
            <option value="<?php echo $row2['thutu']; ?>"><?php echo $row2['tendanhmuc'] ?></option>
            <?php $i++; }?>
        </select>
        <p>Giá :</p>
        <input type="text" name="gia">
        <p>Hình ảnh :</p>
        <input type="file" name="anh">
        <p>Số lượng :</p>
        <input type="text" name="soluong">
        <p>Mô tả :</p>
        <textarea name="mota" id="" cols="30" rows="10"></textarea>
        <p>Bán/Ẩn :</p>
        <select name="dangban" id="">
            <option value="1">Bán</option>
            <option value="0">Ẩn</option>
        </select><br><br>
        <input type="submit" name="themsanpham" value="Thêm">
    </form>
</div>
