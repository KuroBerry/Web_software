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
        <link rel="stylesheet" href="../css/style_index.css">
        <link rel="stylesheet" href="../css/style_decription.css">
    </head>

    <body>

        <?php
            include "../component/header.php";
        ?>

        <div class = "section_container">
            <h2 class="title">Product Information</h2>
            <div class="section">
                <div class="panel">
                    <div>
                        <img class="img" src="../component/iris.jpg" alt="image">
                        <div class="name">Iris</div>
                        <p class="price">1.190.000₫</p>
                        <p class="quantity">Quantity: 34</p>
                        <a class="link" href="../inventory_management.php">Back to Inventory</a>
                    </div>

                    <div>
                        <h3 class="title-description">Decription</h3>
                        <p class="text-description">The iris, with its striking blooms and bold colors, is a symbol of wisdom and eloquence. 
                                                    Its intricate petals unfurl like delicate brushstrokes, showcasing a stunning array of 
                                                    patterns and hues. From the regal purple irises to the vibrant blues, yellows, and whites, 
                                                    these flowers embody a sense of royalty and sophistication. The iris represents inspiration 
                                                    and creativity, its name derived from the Greek goddess of the rainbow. With their unique 
                                                    form and vibrant presence, irises bring a touch of enchantment and allure to any garden or bouquet.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "../component/footer.php";
        ?>

    </body>
</html>