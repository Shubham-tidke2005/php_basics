<!-- <?php 
    function sum($num1,$num2){
        return $num1+$num2;
    }

    function mul($num1,$num2){
        echo $num1*$num2."<br>";
    }

    echo sum(3,4)."<br>";
    mul(4,4);

?> -->


<?php 
//Checks whether a variable exists AND is not NULL
    $st=NULL;
    if(isset($st)){
         echo "Set";
    } else {
        echo "Not set";  // This will run
    }

    
    $name = "";
    /* 
    What is considered empty?
    "" (empty string)
    0
    "0"
    NULL
    FALSE
    Empty array []
    Variable not set
    */
    if(empty($name)){
        echo "<br>"."Variable is empty";
    }
?>