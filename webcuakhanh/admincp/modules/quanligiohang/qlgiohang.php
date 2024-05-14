<?php
    include ('../../config.php');
    if(isset($_POST['soluong']) && $_POST['soluong']>0 && isset($_GET['masp'])){
        if(isset($_COOKIE['loged_in'])){
            $username = explode('.', base64_decode($_COOKIE['loged_in']))[1];
            $query = "SELECT * FROM khach_hang WHERE Username='$username'";
            $result = mysqli_query($mysqli, $query);
            $salt ='khanh';
            $cookie = base64_encode(hash('sha256',$username.$salt).'.'.$username);
            if (mysqli_num_rows($result)>0 && $cookie == $_COOKIE['loged_in']){
                $row = mysqli_fetch_array($result);
                $maKH = $row['MaKH'];
                $masp = $_GET['masp'];

                $query_check ="SELECT *from gio_hang WHERE MaKH='$maKH' and MaSP='$masp' LIMIT 1";
                $result_check = mysqli_query($mysqli, $query_check);
                if(mysqli_num_rows($result_check)==0){
                    $soluong = $_POST['soluong'];

                    $query_insert = "INSERT INTO gio_hang VALUES ('$maKH','$masp','$soluong')";
                    $result_insert = mysqli_query($mysqli, $query_insert);

                    header('location: /webcuakhanh/index.php?quanli=chitietsanpham&masp='.$masp.'&them=success');

                }else{
                    $row1 = mysqli_fetch_array($result);
                    $soluong = $_POST['soluong']+$row1['SoLuong'];
                    $query_add = "UPDATE gio_hang SET SoLuong='$soluong'";
                    $result_add = mysqli_query($mysqli, $query_add);

                    header('location: /webcuakhanh/index.php?quanli=chitietsanpham&masp='.$masp.'&them=success');
                }
            }
        }else{
                header('location: /webcuakhanh/index.php?quanli=chitietsanpham&masp='.$masp.'&them=failed');
            }
    }else{
        header('location: /webcuakhanh/index.php?quanli=chitietsanpham&masp='.$masp.'&them=miss');
    }
?>