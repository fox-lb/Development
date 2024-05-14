<?php
    include('../../config.php');
    if(isset($_POST['themdanhmuc'])){
        $tendanhmuc = $_POST['tendanhmuc'];
        $thutu = $_POST['thutu'];

        $sql_themsp = "INSERT INTO danhmucsp (tendanhmuc,thutu) VALUES ('$tendanhmuc','$thutu')";
        mysqli_query($mysqli, $sql_themsp);
        header('location:../../index.php?action=qldanhmucsp');
    }elseif(isset($_POST['suadanhmuc'])){
        $id = $_POST['iddanhmuc'];
        $query_sua = "UPDATE danhmucsp SET tendanhmuc = '$_POST[tendanhmuc]' , thutu = '$_POST[thutu]' WHERE id_danhmuc = '$id'";
        mysqli_query($mysqli, $query_sua);
        header('location:../../index.php?action=qldanhmucsp');
    }elseif(isset($_GET['action'])=="xoadanhmuc"){
        $id = $_GET['iddanhmuc'];
        $query_xoa = "DELETE FROM danhmucsp WHERE id_danhmuc = '$id'";
        mysqli_query($mysqli, $query_xoa);
        header('location:../../index.php?action=qldanhmucsp');
    }
?>