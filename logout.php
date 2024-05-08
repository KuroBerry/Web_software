<?php
    session_start();
    if(isset($_POST['logout']))
    {
        session_destroy();
        header('Location: index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flower Shop Management</title>
        <link rel="stylesheet" href="./css/style_index.css">
    </head>

    <body>
        <form action="" method="post">
            <div class="log-out">
                <button name="logout" type="submit" >Đăng xuất</button>
            </div>
        </form>
    </body>
</html>
