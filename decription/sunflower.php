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
                        <img class="img" src="../component/sunflower.jpg" alt="image">
                        <div class="name">Sunflower</div>
                        <p class="price">490.000₫</p>
                        <p class="quantity">Quantity: 67</p>
                        <a class="link" href="../inventory_management.php">Back to Inventory</a>
                    </div>

                    <div>
                        <h3 class="title-description">Decription</h3>
                        <p class="text-description">The sunflower, with its vibrant yellow petals and towering stature, 
                                                    is a symbol of warmth, happiness, and vitality. Standing tall and proud, it follows the path 
                                                    of the sun, turning its face to bask in its golden rays. The sunflower's large and cheerful 
                                                    blooms exude a sense of optimism and positivity, brightening any space they adorn. With its 
                                                    bold presence and striking beauty, the sunflower captures the essence of summer and spreads 
                                                    joy wherever it grows. It serves as a reminder to embrace the light, embrace growth, and 
                                                    always face towards the sun.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "../component/footer.php";
        ?>

    </body>
</html>