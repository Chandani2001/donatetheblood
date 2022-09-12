<?php

    $connection = new mysqli("localhost","root" ,"", "donatetheblood");
    if(mysqli_connect_error()){
        echo "FAILED TO CONNECT TO MYSQL: " . mysqli_connect_error();
    }

?>