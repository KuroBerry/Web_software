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
                        <img class="img" src="../component/lily.jpg" alt="image">
                        <div class="name">Lily</div>
                        <p class="price">1.990.000₫</p>
                        <p class="quantity">Quantity: 78</p>
                        <a class="link" href="../inventory_management.php">Back to Inventory</a>
                    </div>

                    <div>
                        <h3 class="title-description">Decription</h3>
                        <p class="text-description">The lily, with its majestic form and intoxicating fragrance, is a symbol of purity and innocence. 
                                                    Its large, trumpet-shaped blooms exude elegance and grace. From the pristine white lilies to the 
                                                    vibrant hues of pink, yellow, and orange, each variety carries its own unique charm. Lilies have 
                                                    long been associated with spirituality and rebirth, often used in religious ceremonies and celebrations. 
                                                    Their captivating beauty and sweet scent make them a favorite choice for bouquets and floral arrangements.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "../component/footer.php";
        ?>

    </body>
</html>