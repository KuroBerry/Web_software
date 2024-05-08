<?php
    session_start();

    if(!isset($_SESSION['ID'])) //Nếu chưa đăng nhập (Tức là SESSION ID chưa được set) thì hệ thống sẽ tự động điều hướng người dùng đến tận trang login
    {
        header('Location: login.php');
        die;
    }
    if (!isset($_SESSION['customer1_visible'])) {
        $_SESSION['customer1_visible'] = true;
    }
    
    if (isset($_POST['decline'])) {
        $_SESSION['customer1_visible'] = false;
        header('Location: order_management.php');
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flower Shop Management</title>
        <link rel="stylesheet" href="./css/style_order.css">
    
    </head>

    <body>
        <?php
            include "./component/header.php"
        ?>

        <div class = "section_container">
            <h2>Order Management</h2>
            <?php
            if ($_SESSION['customer1_visible']) {
                echo '
                <div class="panel">
                    <div>
                        <img class="ava" src="./component/customer1.jpg" alt="image">
                    </div>
                    
                    <div>
                        <div class="name">Emily Johnson</div>
                        <div class="phone">+1 (555) 123-4567</div>
                    </div>

                    <div class ="linkandbutton">
                        <a class="details" href="customer/customer1.php">Details</a>

                        <div class="button-container">
                            <button class="accept">Accept</button>
                            <button class="decline">Decline</button>
                        </div>
                    </div>
                </div>
                ' ;
            }
            ?>

            <div class="panel">
                <div>
                    <img class="ava" src="./component/customer2.jpg" alt="image">
                </div>
                
                <div>
                    <div class="name">Alexander Lee</div>
                    <div class="phone">+44 7890 123456</div>
                </div>
                
                <div class ="linkandbutton">
                    <a class="details" href="customer/customer2.php">Details</a>

                    <div class="button-container">
                        <button class="accept">Accept</button>
                        <button class="decline">Decline</button>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div>
                    <img class="ava" src="./component/customer3.jpg" alt="image">
                </div>
                
                <div>
                    <div class="name">Sophia Chen</div>
                    <div class="phone">+61 412 345 678</div>
                </div>
                
                <div class ="linkandbutton">
                    <a class="details" href="customer/customer3.php">Details</a>

                    <div class="button-container">
                        <button class="accept">Accept</button>
                        <button class="decline">Decline</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "./component/footer.php"
        ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const acceptButtons = document.querySelectorAll('.accept');
                const declineButtons = document.querySelectorAll('.decline');

                acceptButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        alert('You have confirmed this order!');
                        const panel = button.closest('.panel');
                        const buttonContainer = panel.querySelector('.button-container');
                        buttonContainer.innerHTML = 'Accepted';
                    });
                });

                declineButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        alert('You have canceled this order!');
                        const panel = button.closest('.panel');
                        panel.style.display = 'none';
                    });
                });

                window.addEventListener('DOMContentLoaded', function() {
                    var customer1Panel = document.getElementById('customer1_panel');
                    if (customer1Panel) {
                        var isVisible = <?php echo $_SESSION['customer1_visible'] ? 'true' : 'false'; ?>;
                        if (!isVisible) {
                            customer1Panel.style.display = 'none';
                        }
                    }
                });

                function declineOrder() {
                    document.getElementById('declineForm').submit();
                }
            });
        </script>
    </body>
</html>