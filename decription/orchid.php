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
                        <img class="img" src="../component/orchid.jpg" alt="image">
                        <div class="name">Orchid</div>
                        <p class="price">4.900.000₫</p>
                        <p class="quantity">Quantity: 99</p>
                        <a class="link" href="../inventory_management.php">Back to Inventory</a>
                    </div>

                    <div>
                        <h3 class="title-description">Decription</h3>
                        <p class="text-description">The orchid, known for its exquisite and exotic allure, is a testament to nature's artistry. 
                                                    With its delicate petals and intricate patterns, each orchid variety is a masterpiece. 
                                                    From the vibrant phalaenopsis to the graceful dendrobium, orchids display a range of colors 
                                                    and shapes that captivate the eye. These extraordinary flowers symbolize luxury, refinement, 
                                                    and rare beauty. With their elegant presence, orchids add a touch of sophistication and intrigue 
                                                    to any setting.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "../component/footer.php";
        ?>

    </body>
</html>