<?php
    include 'connectToBD.php';


    $id = $_POST['idProduct'];
    $choice = $_POST['choice'];

    if($choice == 1)
        {
            $query = "UPDATE productScan SET trash = 1 WHERE id = ". $id ;
        }
    else
        {
            $query = "UPDATE productScan SET eat = 1 WHERE id = ". $id ;
        }

    $mysqli->query($query);


