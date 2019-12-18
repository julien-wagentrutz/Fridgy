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
            $datetime1 = new DateTime("now");
            $datetime2 = new DateTime($product['date_to consume']);
            $interval = $datetime1->diff($datetime2);
            echo $interval->format('%R%a days');
             include '../include/productCard.php';
        }
    }
    else
    {
        echo ' ';
    }
