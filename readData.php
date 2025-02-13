<?php
    include('dbConnect.php'); //connection 
    $sql="SELECT name as teacher_name FROM `teachers` order by id asc";   //Select query 
    $result=$conn->query($sql);   //read data in results
    if($result){     // if result is successfull
        ?>
        <table border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Id</th>
                     <th>Name</th>
                     <th>Mobile Number</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if($result->num_rows>0){ //checks is having multiple rows
                    while($row=$result->fetch_assoc()){   // if condn is true assigned row data to variable $row
                        ?>
                        <!-- <tr><td><?php echo $row['id']?></td><td><?php echo $row['name']?></td><td><?php echo $row['mobile']?></td></tr> -->
                        <?php
                        print_r($row);
                        // echo "id:".$row['id']." name:".$row['name']."  mobile:" .$row['mobile']. "</br>";
                    }
                }
            ?>
            </tbody>
        </table>
        
        <?php
        
    }else{
        echo $conn->error;
    }
?>