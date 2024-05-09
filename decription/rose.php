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
                        <img class="img" src="../component/rose.jpg" alt="image">
                        <div class="name">Rose</div>
                        <p class="price">990.000₫</p>
                        <p class="quantity">Quantity: 87</p>
                        <a class="link" href="../inventory_management.php">Back to Inventory</a>
                    </div>

                    <div>
                        <h3 class="title-description">Decription</h3>
                        <p class="text-description">The rose, with its delicate petals and enchanting fragrance, is a timeless symbol of love and beauty. 
                                                    Its velvety softness and vibrant colors captivate the senses, evoking feelings of romance and passion. 
                                                    From the classic red rose that signifies deep affection to the gentle pink roses symbolizing grace 
                                                    and admiration, each variety of rose carries its own unique charm. Whether presented as a heartfelt 
                                                    gift or adorning a garden, the rose stands as a testament to the enduring power of love and the 
                                                    exquisite wonders of nature.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "../component/footer.php";
        ?>

    </body>
</html>