<?php
    include_once('dbConnect.php');
    $sql="CREATE DATABASE college";
    if($conn->query($sql)){
        echo "DB Created";
    }else{
        echo "issue in creating DB ". $conn->error;
    }

?>