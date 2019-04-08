<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'salon') or die(mysqli_error($mysqli));

$id = 0;
$serviceName = '';
$servicePrice = '';
$serviceDesc = '';
$update = false;

if (isset($_POST['save'])){
    $serviceName = $_POST['serviceName'];
    $servicePrice = $_POST['servicePrice'];
    $serviceDesc = $_POST['serviceDesc'];

    $mysqli->query("INSERT INTO services (serviceName, servicePrice, serviceDesc) VALUES('$serviceName', '$servicePrice', '$serviceDesc')") or
        die($mysqli->error);
    
    $_SESSION['message'] = "Service has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: services.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM services WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Service has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: services.php");
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM services WHERE id=$id") or die($mysqli->error());
    if(count($result)==1){
        $row =$result->fetch_array();
        $serviceName = $row['serviceName'];
        $servicePrice = $row['servicePrice'];
        $serviceDesc = $row['serviceDesc'];
    }
}
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $serviceName = $_POST['serviceName'];
    $servicePrice = $_POST['servicePrice'];
    $serviceDesc = $_POST['serviceDesc'];

    $mysqli->query("UPDATE services SET serviceName='$serviceName', servicePrice='$servicePrice', serviceDesc='$serviceDesc' WHERE id=$id") or
        die($mysqli->error);
    
    $_SESSION['message'] = "Services has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: services.php');
}
