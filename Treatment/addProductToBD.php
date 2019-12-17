<?php
    include 'connectToBD.php';


    $user = $_POST['user'];
    $codeBar = $_POST['codeBar'];
    $productBrand = $_POST['brand'];
    $productName = $_POST['name'];

    $query = "INSERT INTO productScan(code_bar,user ,product_brand, product_name) VALUES (". $codeBar . ",'".$user ."','".$productBrand."','".$productName."')";
    $mysqli->query($query);




