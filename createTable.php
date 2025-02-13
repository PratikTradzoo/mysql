<?php 
include_once('dbConnect.php');

// students table

$sql="CREATE TABLE `students1` (
id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 firstname varchar(30) not null,
 lastname  varchar(30) not null,
 email   varchar(30) default null,
 course_id INT(3) unsigned not null,
 created_on timestamp default current_timestamp on update current_timestamp,
 Foreign key (course_id) references course(id)
)";

// course
// $sql= "CREATE TABLE `course` (
//     id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name varchar(20) not null,
//     created_on timestamp default current_timestamp on update current_timestamp
// )";

// teachers
// $sql="CREATE TABLE `teachers` (
//     id INT(3) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
//     name VARCHAR(20) NOT NULL,
//     mobile varchar(10) not null,
//     course_id INT(3)unsigned not null,
//     created_on timestamp default current_timestamp on update current_timestamp,
//     FOREIGN KEY (course_id) references course(id)
// )";


if($conn->query($sql)){
    echo "Table Created";
}else{
    echo "Failed to create Table" . $conn->error;
}

?>