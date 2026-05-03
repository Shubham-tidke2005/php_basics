<!-- simple array -->
<!-- <?php 
    $arr=array("ram","sham","shubham");
    echo $arr[0]."<br><hr><br>";

    echo count($arr)."<br><hr><br>";

    array_push($arr,"mahadev","bramha");
    foreach($arr as $ele){
        echo $ele."<br>";
    }

    echo "<br><hr><br>";

    array_pop($arr);
    array_shift($arr);  //remove from front

    $new_arr=array_reverse($arr);

    foreach($arr as $ele){
        echo $ele."<br>";
    }
?> -->

<!-- associative array(key=>val) -->
 <!-- <?php 
    $arr=array(
        1=>"shubham",
        2=>"ram",
        3=>"sham"
    );
    print_r($arr);
    echo "<br><hr><br>";
    echo $arr[1]."<br><hr><br>";

    echo count($arr)."<br><hr><br>";

    foreach($arr as $key=>$val){
        echo $key."=>".$val."<br>";
    }

    $keys=array_keys($arr);
    $values=array_values($arr);
    $arr_flip=array_flip($arr);     //swaps(key,val)
    $arr_rev=array_reverse($arr);
    
    foreach($keys as $ele){
        echo $ele."<br>";
    }

    foreach($values as $ele){
        echo $ele."<br>";
    }

    foreach($arr_flip as $k=>$val){
        echo $k.$val."<br>";
    }
?>  -->



<!-- Multidimentional array -->
<?php 
    $arr=array(
        array(1=>"ram",2=>"sham",3=>"rohan",4=>"tau"),
        array(1=>"mmm",2=>"sss",3=>"rrr",4=>"ttt")
    );
   

    foreach($arr as $ele){
        echo "----------------<br>";
        foreach($ele as $key=>$val){
            echo $key."=>".$val."<br>";
        }
    }
?> 




<!-- php arrays in html -->
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php  
    $arr=array(
        1=>"shubham",
        2=>"ram",
        3=>"sham"
    );
    ?>
    <?php  
    foreach($arr as $key=>$val){
    ?>
    <p><h1><?php echo $key."=>".$val;?><h1></p>
    <?php 
    }
    ?>
    
 </body>
 </html> -->