

<!-- variables -->
 <!-- <?php
    $name="shubham";
    $age=20;
    $is_smart=true;
    $ht=20.21;

    echo "My name is: ".$name."<br><hr><br>";
    echo "I am $name Tidke"."<br><hr><br>"; 
     echo 'I am $name Tidke'."<br><hr><br>"; 
    var_dump($name);
    echo "<br>";
    var_dump($age);
    echo "<br>";
    var_dump($is_smart);
    echo "<br>";
    var_dump($ht);

?>  -->


<!-- operators -->
<!-- <?php
    $num1=30;
    $num2=10;

    echo "Sum is: ".$num1+$num2."<br>";
    echo "subs is: ".$num1-$num2."<br>";
    echo "mul is: ".$num1*$num2."<br>";
    echo "div is: ".$num1/$num2."<br>";
    echo "modulo is: ".$num1%$num2."<br>";
    echo "power is: ".$num1**$num2."<br>";

    #preference
    //()
    //**
    //*,/
    //+,-

    $var=1;
    echo "post is: ".$var++."<br>";
    echo "preincrement is: ".++$var."<br>";

?> -->


<!-- functions -->
 <?php
    //String functions
    $str="hello i am SHUBHAM";

    echo strlen($str)."<br>";
    echo str_replace("S","C",$str)."<br>";
    echo ucfirst($str)."<br>";
    echo ucwords($str)."<br>";
    echo strtoupper($str)."<br>";

    //number functions
    var_dump(is_int("4"));
    echo "<br>";
    var_dump(is_int(4));
    echo "<br>";
    var_dump(is_float("4.22"));
    echo "<br>";
    var_dump(is_float(2.22));
    echo "<br>";
    var_dump(is_numeric("4.22"));
    echo "<br>";
    var_dump(is_numeric(2.22));
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //math functions
    echo pi();
    echo "<br>";
    echo abs(-2222);
    echo "<br>";
    echo sqrt(100);
    echo "<br>";
    echo rand(1,100);
    
    
 ?>