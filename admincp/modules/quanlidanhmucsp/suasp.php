<?php
    $sua_danhmucsp = "SELECT * FROM danhmucsp WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $sua_result = mysqli_query($mysqli, $sua_danhmucsp);
?>

<div class="themsp">
    <p class="themdanhmuc">Sửa Danh Mục Sản Phẩm, Mã Định Danh : <?php $row = mysqli_fetch_array($sua_result); echo $row['thutu'];  ?></p><hr>
    <form action="modules/quanlidanhmucsp/xuli.php" method="POST" >
        <p>Tên danh mục sản phẩm :</p>
        <input type="text" name="tendanhmuc" value=<?php echo $row['tendanhmuc'];  ?>>
        <p>Mã định danh :</p>
        <input type="text" name="thutu" value=<?php echo $row['thutu'];  ?>><br><br>
        <input type="hidden" value=<?php echo $_GET['iddanhmuc']; ?> name= "iddanhmuc">
        <input type="submit" name="suadanhmuc" value="Sửa">
    </form>
</div>
