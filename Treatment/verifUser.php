<?php

    include 'connectToBD.php';

     $userId = $_POST['userId'];
     $name = $_POST['userName'];

     if(!empty($userId))
     {
         $query = "SELECT * FROM user WHERE id ='" . $userId . "'";
         $user = $mysqli->query($query);
         $userDP = $user->fetch_row();

         if($userDP == NULL)
         {
             $query = "INSERT INTO user(id,name) VALUES ('". $userId ."','". $name ."')";
             $mysqli->query($query);
         }
     }



