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
        <link rel="stylesheet" href="./css/style_invent.css">
    </head>

    <body>

        <?php
            include "./component/header.php"
        ?>

        <div class = "section_container">
            <h1 class="title">Inventory Management</h1>
            <div class="section">
                <div class="panel">
                    <a href="./decription/rose.php">
                        <img class="img" src="./component/rose.jpg" alt="image">
                    </a>
                    <p class="name">Rose</p>
                    <p class="price">990.000₫</p>
                </div>
                <div class="panel">
                    <a href="./decription/sunflower.php">
                        <img class="img" src="./component/sunflower.jpg" alt="image">
                    </a>
                    <p class="name">Sunflower</p>
                    <p class="price">490.000₫</p>
                </div>
                <div class="panel">
                    <a href="./decription/tulip.php">
                        <img class="img" src="./component/tulip.jpg" alt="image">
                    </a>
                    <p class="name">Tulip</p>
                    <p class="price">1.490.000₫</p>
                </div>
                <div class="panel">
                    <a href="./decription/orchid.php">
                        <img class="img" src="./component/orchid.jpg" alt="image">
                    </a>
                    <p class="name">Orchid</p>
                    <p class="price">4.900.000₫</p>
                </div>
            </div>

            <div class="section">
                <div class="panel">
                    <a href="./decription/lily.php">
                        <img class="img" src="./component/lily.jpg" alt="image">
                    </a>
                    <p class="name">Lily</p>
                    <p class="price">1.990.000₫</p>
                </div>
                <div class="panel">
                    <a href="./decription/iris.php">
                        <img class="img" src="./component/iris.jpg" alt="image">
                    </a>
                    <p class="name">Iris</p>
                    <p class="price">1.190.000₫</p>
                </div>
            </div>
        </div>

        <?php
            include "./component/footer.php"
        ?>

    </body>
</html>