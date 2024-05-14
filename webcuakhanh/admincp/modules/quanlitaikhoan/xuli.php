<?php
    include('../../config.php');
    if(isset($_POST['suataikhoan'])){
        $tenkh = $_POST['tenkh'];
        $makh = $_POST['makh'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];

        $sql_suatk = "UPDATE khach_hang SET TenKH ='$tenkh', MaKH='$makh', SĐT='$sdt', Email='$email', DiaChi='$diachi' WHERE MaKH='$_POST[makh]'";
        mysqli_query($mysqli, $sql_suatk);
        header('location:../../index.php?action=qltaikhoan');
    }elseif(isset($_GET['action'])=="xoataikhoan"){
        $makh = $_GET['makh'];
        $query_xoa = "DELETE FROM khach_hang WHERE MaKH = '$makh'";
        mysqli_query($mysqli, $query_xoa);
        header('location:../../index.php?action=qltaikhoan');
    }
?>