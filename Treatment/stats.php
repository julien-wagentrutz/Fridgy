<?php

include 'connectToBD.php';

$userId = $_POST['userId'];
$stat = $_POST['stat'];
if($stat == 1)
{
    $query = "SELECT DISTINCT COUNT(id) as num FROM productScan WHERE (eat = 1 OR trash = 1)  AND user = '". $userId ."'";
}
elseif ($stat == 2)
{
    $query = "SELECT COUNT(id) as num FROM productScan WHERE eat = 1 AND user = '". $userId ."'";
}
elseif ($stat == 3)
{
    $query = "SELECT COUNT(id) as num FROM productScan WHERE trash = 1 AND user = '". $userId ."'";
}
$totatProduct = $mysqli->query($query);
$row = mysqli_fetch_assoc($totatProduct);

echo($row['num']);
