<?php
    session_start();
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $gmail = $_POST['email'];
        $password = $_POST['password'];
        if($gmail == "admin@gmail.com" && $password == "123456")
        {
            $_SESSION['ID'] = "Fake ID";
            header('Location: index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flower Shop Management</title>
        <link rel="stylesheet" href="./css/style_login.css">
    </head>

    <body>
    <form name="login_form"  method="POST" class="login_form" action="">

        <div class="login-heading">
            <h1 class="title" >Đăng nhập</h1>
        </div>

        <div class="line"></div>

        <div class="input-title">
            <h4>Email</h4>
            <input name="email" type="email" placeholder="Email" autocomplete="off">
        </div>

        <div class="input-title">
            <h4>Mật khẩu</h4>
            <input name="password" type="password" name="password" placeholder="Mật khẩu">
        </div>

        <p class="regis-message" >Bạn chưa có tài khoản? <a href="register.php">Đăng ký</a> tại đây.</p>

        <?php
        if (!empty($error)) {
            echo "<div class='error-message'>$error</div>";
        }
        ?>

        <button name = "login" type="submit">Đăng nhập</button>
        </form>
    </body>
</html>
