<?php
    session_start();
    if(!isset($_SESSION['ID'])) //Nếu chưa đăng nhập (Tức là SESSION ID chưa được set) thì hệ thống sẽ tự động điều hướng người dùng đến tận trang login
    {
        header('Location: login.php');
        die;
    }
    
    require_once('order_connection.php');
    // Kiểm tra xem người dùng đã nhấn nút Accept hay Decline chưa
    if(isset($_POST['accept'])) {
        updateStatus($_POST['accept']);
        //Gọi hàm cập nhật trạng thái đơn hàng
        header("Location: ../order_management.php");

    }

    elseif(isset($_POST['decline'])) 
    {
        deleteOrder($_POST['decline']);
        // $order_id = $_POST['decline'];
        header("Location: ../order_management.php");
    }
?>
