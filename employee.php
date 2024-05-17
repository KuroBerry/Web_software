<?php
    session_start();

    if(!isset($_SESSION['ID'])) //Nếu chưa đăng nhập (Tức là SESSION ID chưa được set) thì hệ thống sẽ tự động điều hướng người dùng đến tận trang login
    {
        header('Location: login.php');
        die;
    }

    require_once ('./server/employee_connection.php');
    $employeeList = loadEmployeelist()['data'];

    if(isset($_POST['deleteEmployee'])) //Nếu chưa đăng nhập (Tức là SESSION ID chưa được set) thì hệ thống sẽ tự động điều hướng người dùng đến tận trang login
    {
        deleteEmployee($_POST['deleteEmployee']);
        header('Location: employee.php');
    }
    if(isset($_POST['updateEmployee'])) //Nếu chưa đăng nhập (Tức là SESSION ID chưa được set) thì hệ thống sẽ tự động điều hướng người dùng đến tận trang login
    {
        header('Location: update_employee.php?id=' .  $_POST['updateEmployee']);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flower Managemnet</title>
        <link rel="stylesheet" type="text/css" href="./css/style_listEmployee.css">
    </head>

    <body>
        <?php
            include "./component/header.php"
        ?>

        <div class="add-container">
            <a class="add-employ" href="add_employee.php">Thêm nhân viên</a>
        </div>

        <div class="container">

            <?php
            for($i = 0; $i < sizeof($employeeList); $i++)
            {
                ?>
                <div class="employee-panel">
                    <p><?= $employeeList[$i]['name'] ?> - <?= $employeeList[$i]['work_branch'] ?></p>
                    <form name="form-container" method="POST">
                        <div class="btn-container">
                            <button type="submit" name="updateEmployee" value="<?= $employeeList[$i]['ID'] ?>" class="btn update">Cập nhật</button>
                            <button type="submit" name="deleteEmployee" value="<?= $employeeList[$i]['ID'] ?>" class="btn delete">Xóa</button>
                        </div>
                    </form>
                </div>
                <?php
            }
            ?>

        </div>

        <?php
            include "./component/footer.php"
        ?>
    </body>
</html>
