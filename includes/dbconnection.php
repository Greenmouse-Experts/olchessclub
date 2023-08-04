<?php
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $database="chess_database";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die(" connection failed:" . mysqli_connect_error());
    }
?>