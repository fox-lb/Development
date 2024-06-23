<form class="search_form" action="index.php?quanli=timkiem" method="POST">
    <h2>Nhập tên sản phẩm muốn tìm</h2>
    <input class="search" type="text" name="search">
    <br><br>
    <input class="submit" type="submit" name="submit" value="Tìm">
</form>

<?php
    if(isset($_POST['search'])){
        $key_word = $_POST['search'];
        $query_search = "SELECT * from sanpham WHERE tensp LIKE '%$key_word%' ";
        $result = mysqli_query($mysqli, $query_search);
    }
?>
<h3 class="search_form"><?php if(isset($key_word)){echo 'Kết quả tìm kiếm cho "'.$key_word.'"'.'<hr>';} ?></h3>
<ul class="product-list">
    <?php while($row = mysqli_fetch_array($result)){ ?>
        <li>
            <a href="index.php?quanli=chitietsanpham&masp=<?php echo $row['masp']; ?>&sl=1">
                <img src="admincp/modules/quanlisp/images/<?php echo $row['anh']; ?>" height=200px>
                <p><?php echo $row['tensp']?></p>
                <p class="price"><?php echo $row['gia'] ?>đ</p>
            </a>
        </li>
    <?php }?>
</ul>