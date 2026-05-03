<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="php-tutorial";


    //USING OOP APPROACH
    
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }else{
        echo "connection successful";
    }


    // $conn=mysqli_connect($servername,$username,$password,$dbname);
    // if($conn){
    //     //echo "connection successful";
    // }else{
    //     echo "Error: ",mysqli_connect_error();
    // }
?>