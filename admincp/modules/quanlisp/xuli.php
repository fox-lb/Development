<?php
    include('../../config.php');
    $tensp = $_POST['tensp'];
    $masp = $_POST['masp'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    $mota = $_POST['mota'];
    $tinhtrang = $_POST['dangban'];
    $madanhmuc = $_POST['madanhmuc'];
    //anh
    $anh = $_FILES['anh']['name'];
    $anh_tmp = $_FILES['anh']['tmp_name'];
    $tmp=$anh;
    $anh = time()."_".$anh;

    if(isset($_POST['themsanpham'])){
        $sql_themsp = "INSERT INTO sanpham VALUES ('$tensp','$masp','$gia','$anh','$soluong','$mota','$tinhtrang','$madanhmuc')";
        mysqli_query($mysqli, $sql_themsp);
        move_uploaded_file($anh_tmp,'images/'.$anh);
        header('location:../../index.php?action=qlsp');
    }elseif(isset($_POST['suasanpham'])){
        if($tmp!=""){
            $sql = "SELECT * FROM sanpham WHERE masp = '$masp' LIMIT 1";
            $result = mysqli_query($mysqli, $sql);
            while($row = mysqli_fetch_array($result)){
                unlink('images/'.$row['anh']);
            }
            move_uploaded_file($anh_tmp,"images/".$anh);
            $query_suasp = "UPDATE sanpham SET tensp='$tensp', gia='$gia', anh='$anh', soluong='$soluong', mota = '$mota', tinhtrang='$tinhtrang',madanhmuc='$madanhmuc' WHERE masp ='$masp'";
        }else{
            $query_suasp = "UPDATE sanpham SET tensp='$tensp', gia='$gia', soluong='$soluong', mota = '$mota', tinhtrang='$tinhtrang',madanhmuc='$madanhmuc' WHERE masp ='$masp'";
        }
        mysqli_query($mysqli, $query_suasp);
        header('location:../../index.php?action=qlsp');
    }elseif(isset($_GET['action'])=="xoasanpham"){
        $masp = $_GET['masp'];
        $sql = "SELECT * FROM sanpham WHERE masp = '$masp' LIMIT 1";
        $result = mysqli_query($mysqli, $sql);
        while($row = mysqli_fetch_array($result)){
            unlink('images/'.$row['anh']);
        }
        $query_xoasp = "DELETE FROM sanpham WHERE masp = '$masp'";
        mysqli_query($mysqli, $query_xoasp);
        header('location:../../index.php?action=qlsp');
    }
?>