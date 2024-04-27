<?php
    session_start();

    if(!isset($_SESSION['ID'])) //Nếu chưa đăng nhập (Tức là SESSION ID chưa được set) thì hệ thống sẽ tự động điều hướng người dùng đến tận trang login
    {
        header('Location: login.php');
        die;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flower Shop Management</title>
        <link rel="stylesheet" href="./css/style_inventory.css">
    </head>

    <body>

        <?php
            include "./component/header.php"
        ?>

        <div class = "section_container">
            <h1>Đây là phần inventory</h1>
        </div>

        <?php
            include "./component/footer.php"
        ?>

    </body>
</html>