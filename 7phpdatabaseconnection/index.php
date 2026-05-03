<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="php-tutorial";


    //USING OOP APPROACH
    /*
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }else{
        echo "connection successful";
    }
    */

    //USING Procedural APPROACH(return obj)
    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if($conn){
        echo "connected successfully";
    }else{
        echo "have some error".mysqli_connect_error();
    }

?>