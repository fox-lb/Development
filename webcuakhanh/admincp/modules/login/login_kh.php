<?php  
    session_start();
    include ('../../config.php');
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $salt = 'khanh';
        $password = hash('sha256',$_POST['password'].$salt);
        $query = "SELECT * FROM khach_hang WHERE Username = '$username' and Password = '$password'";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0){
            $hash_value = base64_encode(hash('sha256', $username.$salt).'.'.$username);
            $_SESSION[$username] = $hash_value;
            setcookie('loged_in', $hash_value, time() + (86400 * 30), "/"); // Thời gian sống cookie là 30 ngày
            header('location: /webcuakhanh/index.php');
        }else{
            echo '<script>alert("Thông tin đăng nhập sai! Vui lòng thử lại.");</script>';
            header('location: /webcuakhanh/login.php?login=faild');
        }
    }
?>