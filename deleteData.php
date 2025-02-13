<?php
    include_once('dbConnect.php');
    $sql="DELETE  FROM `teachers` where name like 'kumbhar%'";
    if($conn->query($sql)){
        echo "Deleted";
    }
?>