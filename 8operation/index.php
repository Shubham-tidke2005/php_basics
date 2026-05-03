<!-- insert data in database -->
<!-- <?php 
    // include("config/database.php");
    // $date=date("Y-m-d H:i:s");
    // $sql="insert into users (username,password,created_at)
    //         values ('mohan','123','$date')";
    // $result=$conn->query($sql);
    // if($result){
    //     echo "inserted data into table <br>";
    // }else{
    //     echo "have some error ".$conn->error;
    // }

?> -->



<!-- DISPLAY DATA -->
<?php 
    include("config/database.php");
    
    $sql="select * from users";

    $result=$conn->query($sql);
    //print_r($result);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<br>";
            print_r($row);
        }
    }else{
        echo "NO DATA";
    }

?> 



<!-- UPDATE User -->
<?php 
    include("config/database.php");
    $sql="update users set username='xyz' where id>=5";
    $result=$conn->query($sql);
    if($result){
        echo "updated successfully";
    }else{
        echo "some error";
    }
?>


<!-- Delete Users -->
<?php 
    include("config/database.php");
    $sql="delete from users  where id>=6";
    $result=$conn->query($sql);
    if($result){
        echo "deleted successfully";
    }else{
        echo "some error";
    }
?>
