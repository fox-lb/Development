<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <form class="login-form" action="admincp/modules/login/login_kh.php" method="POST">
            <h2 class="login">Đăng nhập</h2>
            <div class="input-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Đăng nhập</button>
        </form>
        <p class="faild">
        <?php
            if(isset($_GET['signup'])=='success'){
                echo '<script>alert("Đăng ký thành công, hãy đăng nhập!");</script>';
            }
            if(isset($_GET['login'])=='faild'){
                echo 'Thông tin đăng nhập sai! Vui lòng thử lại.';
            }
        ?>
        </p>
        <p class="loginp"><a href="signup.php">Đăng ký</a></p>
        <p class="loginp"><a href="forget_pass.php">Quên mật khẩu</a></p>
    </div>
</body>
</html>
