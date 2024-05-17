<?php
    session_start();
    require_once('./server/employee_connection.php');

    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['branch'])) {
    
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $branch = $_POST['branch'];

        if(empty($name))
        {
            $error = 'Tên nhân viên không được bỏ trống';
        }
        else if(empty($email))
        {
            $error = 'Không được bỏ trống email';
        }
        else if(empty($phone))
        {
            $error = 'Không được bỏ trống số điện thoại';
        }
        else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            $error = 'Địa chỉ Email không hợp lệ';
        }
        else {

            $result = addEmployee($name, $phone, $email, $branch); // Chú ý thêm tham số branch vào hàm addEmployee

            if($result['code'] == 0)
            {
            ?>
            <script>
                alert('<?= $result['error']; ?>');
                window.location.href = 'employee.php';
            </script>
            <?php
            }
            
            else
            {
                $error = $result['error'];
            } 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop Management</title>
    <link rel="stylesheet" href="./css/style_login.css">
</head>
<body>
    <div class="back_container">
        <a class="back" href="javascript:history.go(-1)">Back</a>
    </div>

    <form name="login_form"  method="POST" class="login_form" action="">
        <div class="login-heading">
            <h1 class="title">Thêm nhân viên mới</h1>
        </div>

        <div class="line"></div>

        <div class="input-title">
            <h4>Họ và tên</h4>
            <input name="name" autocomplete="off">
        </div>

        <div class="input-title">
            <h4>Số điện thoại</h4>
            <input name="phone" autocomplete="off">
        </div>

        <div class="input-title">
            <h4>Email</h4>
            <input name="email" autocomplete="off">
        </div>

        <!-- Thêm lựa chọn cho chi nhánh làm việc -->
        <div class="input-title">
            <h4>Chi nhánh làm việc</h4>
            <select name="branch">
                <option value="1">Hà Nội</option>
                <option value="2">Đà Lạt</option>
                <option value="3">TP. Hồ Chí Minh</option>
            </select>
        </div>

        <?php
        if (!empty($error)) {
            echo "<div class='error-message'>$error</div>";
        }
        ?>

        <button name="login" type="submit">Thêm</button>
    </form>
</body>
</html>
