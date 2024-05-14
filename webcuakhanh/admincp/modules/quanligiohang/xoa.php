<?php
    include ('../../config.php');
    if(isset($_POST['makh']) && isset($_POST['masp'])){
        if(isset($_COOKIE['loged_in'])){
            $username = explode('.', base64_decode($_COOKIE['loged_in']))[1];
            $query = "SELECT * FROM khach_hang WHERE Username='$username'";
            $result = mysqli_query($mysqli, $query);
            $salt ='khanh';
            $cookie = base64_encode(hash('sha256',$username.$salt).'.'.$username);
            if (mysqli_num_rows($result)>0 && $cookie == $_COOKIE['loged_in']){
                $row = mysqli_fetch_array($result);
                $maKH = $row['MaKH'];
                $masp = $_POST['masp'];
        

                $query_delete= "DELETE from gio_hang WHERE MaKH = '$maKH' and MaSP='$masp'";
                $result_insert = mysqli_query($mysqli, $query_delete);

                header('location: /webcuakhanh/index.php?quanli=giohang&xoa=success');
            }
        }else{
                header('location: /webcuakhanh/index.php?quanli=giohang&xoa=failed');
        }
    }else{
        header('location: /webcuakhanh/index.php?quanli=giohang&xoa=miss');
    }
?>