<?php 
    include('dbConnect.php');
    $sql="update `teachers` set `mobile`='123456789', `course_id`=3 where name='AR Bagga' ";
    if($conn->query($sql)){
        echo "success";
    }
?>