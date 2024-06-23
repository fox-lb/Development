<?php
    $suasp = "SELECT * FROM sanpham WHERE masp='$_GET[masp]' LIMIT 1";
    $sua_result = mysqli_query($mysqli, $suasp);
?>

<div class="themsp">
    <p class="themdanhmuc">Sửa sản phẩm <?php $row = mysqli_fetch_array($sua_result); echo $row['masp'];  ?></p><hr>
    <form action="modules/quanlisp/xuli.php" method="POST" enctype="multipart/form-data" >
        <p>Tên sản phẩm :</p>
        <input type="text" name="tensp" value=<?php echo $row['tensp'];  ?>>
        <p>Mã sản phẩm :</p>
        <input type="text" name="masp" value=<?php echo $row['masp'];  ?>>
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
        <input type="text" name="gia" value=<?php echo $row['gia'];  ?>>
        <p>Hình ảnh :</p>
        <img src="modules/quanlisp/images/<?php echo $row['anh']; ?>" width=250px alt=""><br>
        <input type="file" name="anh">
        <p>Số lượng :</p>
        <input type="text" name="soluong" value=<?php echo $row['soluong'];  ?>>
        <p>Mô tả :</p>
        <textarea name="mota" id="" cols="30" rows="10" ></textarea>
        <p>Bán/Ẩn :</p>
        <select name="dangban" id="">
            <option value="1">Bán</option>
            <option value="0">Ẩn</option>
        </select><br><br>
        <input type="hidden" value=<?php echo $_GET['masp']; ?> name= "masp">
        <input type="submit" name="suasanpham" value="Sửa">
    </form>
</div>
