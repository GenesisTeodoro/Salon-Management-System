<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'salon') or die(mysqli_error($mysqli));

$id = 0;
$productName = '';
$productPrice = '';
$update = false;

if (isset($_POST['save'])){
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];

    $mysqli->query("INSERT INTO products (productName, productPrice) VALUES('$productName', '$productPrice')") or
        die($mysqli->error);
    
    $_SESSION['message'] = "Product Saved!";
    $_SESSION['msg_type'] = "success";

    header("location: products.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM products WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Product Deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: products.php");
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM products WHERE id=$id") or die($mysqli->error());
    if(count($result)==1){
        $row =$result->fetch_array();
        $productName = $row['productName'];
        $productPrice = $row['productPrice'];
    }
}
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];

    $mysqli->query("UPDATE products SET productName='$productName', productPrice='$productPrice' WHERE id=$id") or
        die($mysqli->error);
    
    $_SESSION['message'] = "Products Updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: products.php');
}
