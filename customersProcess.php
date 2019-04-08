<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'salon') or die(mysqli_error($mysqli));

$id = 0;
$firstName = '';
$lastName = '';
$email = '';
$phone = '';
$update = false;

if (isset($_POST['save'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $mysqli->query("INSERT INTO customers (firstName, lastName, email, phone) VALUES('$firstName', '$lastName', '$email', '$phone')") or
        die($mysqli->error);
    
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: customers.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM customers WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: customers.php");
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM customers WHERE id=$id") or die($mysqli->error());
    if(count($result)==1){
        $row =$result->fetch_array();
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $phone = $row['phone'];
    }
}
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $mysqli->query("UPDATE customers SET firstName='$firstName', lastName='$lastName', email='$email', phone='$phone' WHERE id=$id") or
        die($mysqli->error);
    
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: customers.php');
}
