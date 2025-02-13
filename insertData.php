<?php
include('dbConnect.php');
// $sql="INSERT into `course`(
// `name`)
// values('BBA')";

$sql="INSERT INTO `teachers`(`name`, `mobile`, `course_id`) VALUES ('Kumbhar sir','234','1'),('kumbhar','123','2'),('pradnya patil','987','1'),('mundhe','000','1')";

if($conn->query($sql)){
    echo " Data inserted";
}else{
    echo "failed";
}


?>