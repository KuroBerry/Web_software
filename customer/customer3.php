<?php
    session_start();

    if(!isset($_SESSION['ID'])) //Nếu chưa đăng nhập (Tức là SESSION ID chưa được set) thì hệ thống sẽ tự động điều hướng người dùng đến tận trang login
    {
        header('Location: ../login.php');
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flower Shop Management</title>
        <link rel="stylesheet" href="../css/style_customer.css">
        <link rel="stylesheet" href="../css/style_index.css">
    </head>

    <body>

        <?php
            include "../component/header.php"
        ?>

        <div class = "section_container">
            <h2>Your Order Details</h2>
            <div class="panel">
                <div class= "left-column">
                    <img class="ava" src="../component/customer3.jpg" alt="image">
                    <div class="name">Sophia Chen</div>
                    <div class="phone">+61 412 345 678</div>
                    <div class= "address">789 Oak Avenue, Sydney, Australia</div>
                    <a class="link" href="../order_management.php">Back to Order</a>
                    <div class="button-container">
                        <button class="accept">Accept</button>
                        <button class="decline">Decline</button>
                    </div>
                </div>

                <div class="right-column">
                    <p class = "product">-Carnation</p>
                    <p class = "product">-Gerbera Daisy</p>
                    <p class = "product">-Peony</p>
                    <p class = "product">-Jasmine</p>
                    <p class = "product">-Protea</p>
                </div>
                
            </div>
        </div>
        <script src="../javascript/customer.js"></script>
        <?php
            include "../component/footer.php"
        ?>

    </body>
</html>