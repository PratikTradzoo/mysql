<?php 
include_once('dbConnect.php');

$sql="DROP DATABASE IF EXISTS `auxiremcourse` ";

// $sql = "DROP TABLE IF EXISTS `students`";

if($conn->query($sql)){
    echo "Table Dropped";
}else{
    echo "Failed to create Table" . $conn->error;
}

?>