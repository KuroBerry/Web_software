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
                        <img class="img" src="../component/tulip.jpg" alt="image">
                        <div class="name">Tulip</div>
                        <p class="price">1.490.000₫</p>
                        <p class="quantity">Quantity: 54</p>
                        <a class="link" href="../inventory_management.php">Back to Inventory</a>
                    </div>

                    <div>
                        <h3 class="title-description">Decription</h3>
                        <p class="text-description">The tulip, with its elegant silhouette and vibrant petals, 
                                                    is a symbol of grace and beauty. Its slender stem carries a 
                                                    single cup-shaped bloom that comes in a dazzling array of colors. 
                                                    From the fiery reds and oranges to the soft pastels and pure whites, 
                                                    tulips bring a burst of color and joy to any garden or bouquet. 
                                                    With their enchanting presence, tulips herald the arrival of spring, 
                                                    awakening the senses and filling the air with their sweet fragrance.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "../component/footer.php";
        ?>

    </body>
</html>