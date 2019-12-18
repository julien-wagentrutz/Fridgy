<?php
    include 'connectToBD.php';


    $user = $_POST['user'];
    $codeBar = $_POST['codeBar'];
    $productBrand = $_POST['brand'];
    $productName = $_POST['name'];
    $productImg = $_POST['imgSrc'];
    $productQuantiy = $_POST['productQuantity'];

    $query = "INSERT INTO productScan(code_bar,user ,product_brand, product_name, img_src,product_quantity) VALUES (". $codeBar . ",'".$user ."','".$productBrand."','".$productName."','". $productImg ."','". $productQuantiy ."')";
    echo $query;
    $mysqli->query($query);




