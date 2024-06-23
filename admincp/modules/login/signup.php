<?php
    if(isset($_POST['email']) &&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['address'])){
        include ('../../config.php');

        $tenKH = $_POST['name'];
        $sdt = $_POST['phone'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $salt = 'khanh';
        $pass = hash('sha256',$_POST['password'].$salt);
        $address = $_POST['address'];

        $query_get_maKH = "SELECT COUNT(*) as quantity FROM khach_hang";
        $result = mysqli_query($mysqli, $query_get_maKH);
        $row = mysqli_fetch_array($result);
        $ma_tiep_theo = $row['quantity']+1;
        $maKH = "KH".$username;

        $query_insert = "INSERT INTO khach_hang VALUES ('$maKH','$tenKH','$sdt', '$email', '$address', '$username', '$pass')";
        mysqli_query($mysqli, $query_insert);
        header('location:/webcuakhanh/login.php?signup=success');
    }else{
        header('location: /webcuakhanh/signup.php?signup=faild');
    }


?>