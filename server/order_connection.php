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

function load_order()
{
    $conn = connection();

    $sql = "SELECT * FROM orders, customer WHERE orders.customer_id = customer.ID";

    $result = $conn -> query($sql);

    $data = array();

    for($i = 0; $i < $result -> num_rows; $i ++)
    {
        $row = $result -> fetch_assoc();
        $data[] = $row;
    }

    return array('code' => 0, 'data' => $data);
}

function updateStatus($id)
{
    $sql = "UPDATE `orders` SET `status`='1' WHERE id = ?";
    $conn = connection();

    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $id);

    if (!$stm->execute()) {
        return null;
    }

    return false;
}

function deleteOrder($id)
{
    $sql = "DELETE FROM `orders` WHERE id = ?";
    $conn = connection();

    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $id);

    if (!$stm->execute()) {
        return null;
    }

    return false;
}
?>