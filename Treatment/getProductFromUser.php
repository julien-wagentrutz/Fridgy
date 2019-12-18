<?php

    include 'connectToBD.php';

    $userId = $_POST['userId'];
    $query = "SELECT * FROM  productScan WHERE trash = 0 AND eat = 0 AND user = '" . $userId . "'";
    $products = $mysqli->query($query);

    if($products != NULL)
    {
        $products->fetch_all();
        foreach ($products as $product)
        {
             include '../include/productCard.php';
        }
    }
    else
    {
        echo ' ';
    }
