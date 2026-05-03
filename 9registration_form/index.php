<?php 
    include("config/database.php");

    if(isset($_POST["btn"])){
        extract($_POST);
        if(empty($username) || empty($password)){
            echo "enter complete details <br>";
        }else{
            $date=date("Y-m-d H:i:s");
            $sql="insert into users_register (username,password,created_at)
                     values ('$username','$password','$date')";
            $result=$conn->query($sql);
             if($result){
            }else{
                  echo "have some error";
                }
            }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .container {
        background: white;
        padding: 30px;
        border-radius: 15px;
        width: 100%;
        max-width: 350px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .input-group {
        margin-bottom: 15px;
        position: relative;
    }

    .input-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        transition: 0.3s;
    }

    .input-group input:focus {
        border-color: #667eea;
        box-shadow: 0 0 5px rgba(102,126,234,0.5);
    }

    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 8px;
        background: #667eea;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background: #5a67d8;
        transform: scale(1.05);
    }

    .btn:active {
        transform: scale(0.98);
    }

    /* Responsive */
    @media (max-width: 400px) {
        .container {
            padding: 20px;
        }
    }

</style>
</head>

<body>

<div class="container">
    <h2>Register</h2>

    <form action="index.php" method="post">
        <div class="input-group">
            <input type="text" name="username" placeholder="Enter your name" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>

        <input type="submit" name="btn" value="Submit">
    </form>
</div>

</body>
</html>