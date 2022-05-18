<?php
    $dbHost="localhost";
    $dbUsername="root";
    $dbPassword="MYPASSWORD123";
    $dbName="pictures";

    //Create database connection
    $db=new mysqli($dbHost, $dbUsername,$dbPassword,$dbName);

    //check connection
    if($db->connect_error){
        die("connection failed: " .$db->connect_error);
    }

?>