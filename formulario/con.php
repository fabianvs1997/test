<?php

    $servername = "localhost";
    $username = "root";
    $password = "7lqcyOIP!";

    $database = "u112702079_db";

     // Create a connection
     $conn = mysqli_connect($servername,
         $username, $password, $database);

    if($conn) {
        echo "success";
    }
    else {
        die("Error". mysqli_connect_error());
    }
?>