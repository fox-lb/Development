<?php  
    include ('../../../config.php');
    if (isset($_POST['old_pass']) && isset($_POST['new_pass']) && isset($_POST['confirm'])){
        if(isset($_COOKIE['loged_in'])){
            $username = explode('.', base64_decode($_COOKIE['loged_in']))[1];
            $query = "SELECT * FROM khach_hang WHERE Username='$username'";
            $result = mysqli_query($mysqli, $query);
            $salt ='khanh';
            $cookie = base64_encode(hash('sha256',$username.$salt).'.'.$username);
            if (mysqli_num_rows($result)>0 && $cookie == $_COOKIE['loged_in']){
                $old = $_POST['old_pass'];
                $new = $_POST['new_pass'];
                $confirm = $_POST['confirm'];
                $row = mysqli_fetch_array($result);
                $check_password = hash('sha256',$old.$salt);
                $maKH = $row['MaKH'];
                if($check_password == $row['Password']){
                    if(($new==$confirm)){
                        $new_pass = hash('sha256',$new.$salt);
                        $query_update = "UPDATE khach_hang SET Password='$new_pass' WHERE MaKH='$maKH'";
                        $result_update = mysqli_query($mysqli, $query_update);
                        header('location: /webcuakhanh/index.php?quanli=info&update=success');
                    }else{
                        header('location: /webcuakhanh/index.php?quanli=change_pass&update=diff');
                    }
                }else{
                    header('location: /webcuakhanh/index.php?quanli=change_pass&update=wrong');
                }
            }else{
                header('location: /webcuakhanh/index.php?quanli=change_pass&update=faild');
            }
        }else{
            header('location: /webcuakhanh/index.php?quanli=change_pass&update=faild');
        }
    }else{
            header('location: /webcuakhanh/index.php?quanli=change_pass&update=miss');
    }
?>