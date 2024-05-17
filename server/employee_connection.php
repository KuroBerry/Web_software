<?php
function connection()
{
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $databasename = 'flower_management';

    $conn = new mysqli($server, $user, $password, $databasename);

    if ($conn->connect_error) {
        die("cant connect to database, error" . $conn->connect_error);
    }
    return $conn;
}

function loadEmployeelist()
{
    $conn = connection();

    $sql = "SELECT * FROM employee";

    $result = $conn -> query($sql);

    $data = array();

    for($i = 0; $i < $result -> num_rows; $i ++)
    {
        $row = $result -> fetch_assoc();
        $data[] = $row;
    }

    return array('code' => 0, 'data' => $data);
}

function addEmployee($name, $phone, $email, $branch)
{
    $conn = connection();

    if($branch == 1)
    {
        $work_branch = 'Hà Nội';
    }
    elseif($branch == 2)
    {
        $work_branch = 'Đà Lạt';
    }
    elseif($branch == 3)
    {
        $work_branch = 'Hồ Chí Minh';
    }
    
    $sql = "INSERT INTO employee(name, phone, email, work_branch) values(?,?,?,?)";

    $stm = $conn -> prepare($sql);
    $stm -> bind_param('ssss', $name, $phone, $email, $work_branch);

    if(!$stm -> execute())
    {
        return array('code' => 2, 'error' => 'An error occured. Please try again later');
    }

    return array('code' => 0, 'error' => 'Đã thêm nhân viên thành công');
}

function deleteEmployee($id)
{
    $sql = "DELETE FROM `employee` WHERE id = ?";
    $conn = connection();

    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $id);

    if (!$stm->execute()) {
        return null;
    }

    return true;
}

function loadEmployeeifo($id)
{
    $conn = connection(); 
    $sql = "SELECT * FROM `employee` WHERE `ID` = ?"; 

    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $id);


    if (!$stm->execute()) {
        return array('code' => 2, 'error' => 'An error occurred. Please try again later');
    }

    $result = $stm->get_result();

    if ($result->num_rows == 0) {
        return array('code' => 1, 'error' => 'Không tìm thấy dữ liệu');
    }

    $data = $result->fetch_assoc();
    return array('code' => 0, 'data' => $data);
}

function updateEmployee($id, $name, $phone, $email, $work_branch)
{
    $conn = connection();
    $sql = "UPDATE `employee` SET `name`=?, `phone`=?, `email`=?, `work_branch`=? WHERE id = ?";

    $stm = $conn -> prepare($sql);
    $stm -> bind_param('sssss', $name, $phone, $email, $work_branch, $id);

    if(!$stm -> execute())
    {
        return array('code' => 2, 'error' => 'An error occured. Please try again later');
    }

    return array('code' => 0, 'error' => 'Đã cập nhật thông tin nhân viên');
}
?>