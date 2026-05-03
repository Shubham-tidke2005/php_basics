<!-- conditional statements -->
 <!-- <?php 
    // relatinal operators
    //  ==
    //  >=
    //  <=
    //  !=
    //  !


    //logical operators
    //&& 
    //||
    //!

    $age=18;
    $salary=true;

    if($age>=18 && $salary){
        echo "you are atma nirbhar";
    }else if($age<18){
        echo "you are child try later";
    }else if(!$salary){
        echo "no income";
    }else{
        echo "default";
    }
?>  -->



<!-- switch case -->
<!-- <?php 
    $grade="AA";
    switch($grade){
        case "A":
            echo "Grade A";
            break;
        case "B":
            echo "Grade B";
            break;
        case "C":
            echo "Grade C";
            break;
        case "D":
            echo "Grade D";
            break;
        default :
            echo "$grade is invalid";
            break;
    }
?> -->



<!-- loops -->
<!-- <?php 
    for($i=20;$i>=1;$i=$i-2){
        echo $i."<br>";
    }

     echo "while loop----<br>";

    $j=0;
    while($j<=10){
        echo $j."<br>";
        $j++;

    }
        
    
?> -->




<!-- loops inside html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $j=1;
    while($j<=10){
     ?>
        <p><h1>j is : <?php echo $j ?></h1></p>
    <?php
        $j++;
    }
    ?>
</body>
</html>

