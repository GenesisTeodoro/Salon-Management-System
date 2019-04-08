<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'salon') or die(mysqli_error($mysqli));

$id = 0;
$staffName = '';
$age = '';
$gender = '';
$phone = '';
$email = '';
$update = false;

if (isset($_POST['save'])){
    $staffName = $_POST['staffName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $mysqli->query("INSERT INTO staffs (staffName, age, gender, phone, email) VALUES('$staffName', '$age', '$gender', '$phone', '$email')") or
        die($mysqli->error);
    
    $_SESSION['message'] = "Staff Saved!";
    $_SESSION['msg_type'] = "success";

    header("location: staffs.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM staffs WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Staff Deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: staffs.php");
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM staffs WHERE id=$id") or die($mysqli->error());
    if(count($result)==1){
        $row =$result->fetch_array();
        $staffName = $row['staffName'];
        $age = $row['age'];
        $gender = $row['gender'];
        $phone = $row['phone'];
        $email = $row['email'];
    }
}
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $staffName = $_POST['staffName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $mysqli->query("UPDATE staffs SET staffName='$staffName', age='$age', gender='$gender',phone='$phone', email='$email' WHERE id=$id") or
        die($mysqli->error);
    
    $_SESSION['message'] = "Staffs Updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: staffs.php');
}
