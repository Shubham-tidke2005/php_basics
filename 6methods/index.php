<!-- <?php 
    // $_GET
    // Data is sent via URL
    // Visible in browser address bar
    // Limited size (~2048 characters)
    // Less secure (not for passwords)

    // $_POST
    // Data is sent in request body
    // Not visible in URL
    // No size limit (practically large)
    // More secure than GET

    if(isset($_POST["login"])){
        if(empty($_POST["username"])){
            echo "enter valid name <br>";
        }else if(empty($_POST["pass"])){
            echo "enter valid pass <br>";
        }else{
            echo "login sucessfull <br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="index.php" method="post">
        <label>Username: </label>
        <input type="text" name="username">
        <br>
        <hr>
        <label>Password: </label>
        <input type="text" name="pass">
        <br>
        <hr>
        <input type="submit" name="login">

    </form>
</body>
</html> -->





<!-- RADIO BUTTON -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="index.php" method="post">
        <label>Select one course: </label>
        <br>
        <input type="radio" name="course" value="Science"> Science <br>

        <input type="radio" name="course" value="Maths"> Maths <br>

        <input type="radio" name="course" value="English"> English <br>
        
        <input type="submit" name="login" value="btn_name">

    </form>

    <?php 
    print_r($_POST);
        if(isset($_POST["login"])){
            
            if(empty($_POST["course"])){
                echo  "course not selected <br>";
            }else{
                echo  "you have selected  selected ".$_POST["course"]." <br>";
            }
        }
    ?>
</body>
</html> -->




<!-- CHECK BOX -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="index.php" method="post">
        <label>Select food items: </label>
        <br>
        <input type="checkbox" name="foo[]" value="maggi"> maggi <br>

        <input type="checkbox" name="foo[]" value="snaks"> snaks <br>

        <input type="checkbox" name="foo[]" value="veg"> veg <br>

        <input type="checkbox" name="foo[]" value="non-veg">non-veg <br>
        
        <input type="submit" name="login" value="btn_name">

    </form>

    <?php 
    // print_r($_POST);
        if(isset($_POST["login"])){
            $foods=$_POST['foo'];
            foreach($foods as $item){
                echo "You like ".$item."<br>";
            }
        }
    ?>
</body>
</html>


