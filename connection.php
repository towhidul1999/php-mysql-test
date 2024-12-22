<?php 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $dbname = "php_mysql";

    $con = mysqli_connect($hostname, $username, $password);

    $selectdb = mysqli_select_db($con, $dbname);


?>