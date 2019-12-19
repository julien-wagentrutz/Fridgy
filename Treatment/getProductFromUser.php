<?php

    include 'connectToBD.php';

    $userId = $_POST['userId'];
    $query = "SELECT * FROM  productScan WHERE trash = 0 AND eat = 0 AND user = '" . $userId . "' ORDER BY date_to_consume ASC";
    $products = $mysqli->query($query);

    if($products != NULL)
    {
        $products->fetch_all();
        foreach ($products as $product)
        {
            $datetime1 = new DateTime("now");
            $datetime2 = new DateTime($product['date_to_consume']);
            $interval = $datetime1->diff($datetime2);
            $product['dayLeft'] = $interval->format('%a');
            $product['dayLeft'] += 1;
             include '../include/productCard.php';
        }
    }
    else
    {
        echo ' ';
    }
