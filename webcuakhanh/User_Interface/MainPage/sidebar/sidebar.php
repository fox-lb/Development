<?php
    $query = "SELECT * FROM danhmucsp";
    $result = mysqli_query($mysqli, $query);
?>

<div class="sidebar">
    <h3 id="dmsp">Danh Mục Sản Phẩm</h3>
    <ul class="list-sidebar">
        <?php 
            while($row = mysqli_fetch_array($result)){
        ?>
        <li><a href="index.php?quanli=danhmucsp&madanhmuc=<?php echo $row['thutu']; ?>"><?php echo $row['tendanhmuc']; ?></a></li>    
        <?php } ?>
    </ul>
    
</div>