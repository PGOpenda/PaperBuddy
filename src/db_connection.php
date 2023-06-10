<?php
    // Variables
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "paperbuddy";

    // establish connection to the database server
    $connection = mysqli_connect($host,$username,$password,$dbname); 

    if(!$connection){
        echo "Connection to the database failed!";
    }
?>