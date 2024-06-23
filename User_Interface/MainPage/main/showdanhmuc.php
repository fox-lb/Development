<?php
    if(isset($_GET['madanhmuc'])){
        $madanhmuc = $_GET['madanhmuc'];
        $lietkesp = "SELECT * FROM sanpham,danhmucsp WHERE sanpham.madanhmuc=danhmucsp.thutu and sanpham.madanhmuc=$madanhmuc";
    }else{
        $lietkesp = "SELECT * FROM sanpham,danhmucsp WHERE sanpham.madanhmuc=danhmucsp.thutu";
    }
    
    $lietke_result = mysqli_query($mysqli, $lietkesp);
?>
<ul class="product-list">
    <?php while($row = mysqli_fetch_array($lietke_result)){ ?>
        <li>
            <a href="index.php?quanli=chitietsanpham&masp=<?php echo $row['masp']; ?>&sl=1">
                <img src="admincp/modules/quanlisp/images/<?php echo $row['anh']; ?>" height=200px>
                <p><?php echo $row['tensp']?></p>
                <p class="price"><?php echo $row['gia'] ?>đ</p>
            </a>
        </li>
    <?php }?>
</ul>