<?php
    include ('../../../config.php');
    if(isset($_POST['email'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['address'])){
        if(isset($_COOKIE['loged_in'])){
            $username = explode('.', base64_decode($_COOKIE['loged_in']))[1];
            $query = "SELECT * FROM khach_hang WHERE Username='$username'";
            $result = mysqli_query($mysqli, $query);
            $salt ='khanh';
            $cookie = base64_encode(hash('sha256',$username.$salt).'.'.$username);
            if (mysqli_num_rows($result)>0 && $cookie == $_COOKIE['loged_in']){
                $row = mysqli_fetch_array($result);
                $maKH = $row['MaKH'];
                $tenKH = $_POST['name'];
                $email = $_POST['email'];
                $sdt = $_POST['phone'];
                $diachi = $_POST['address'];
                $query_update = "UPDATE khach_hang SET TenKH='$tenKH',SĐT='$sdt',Email='$email',DiaChi='$diachi' WHERE MaKH='$maKH'";
                $result_update = mysqli_query($mysqli, $query_update);
                
                header('location: /webcuakhanh/index.php?quanli=info&update=success');
            }
        }else{
            header('location: /webcuakhanh/index.php?quanli=change_info&update=faild');
        }
    }else{
        header('location: /webcuakhanh/index.php?quanli=change_info&update=miss');
    }
?>