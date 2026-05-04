<?php 
    include("config/database.php");

    $result=null;
    if(isset($_GET['id'])){
        $sql="select * from users_register where id=".$_GET['id'];
        $result=$conn->query($sql);
        $user=mysqli_fetch_assoc($result);
        if($result){
            //echo "edited ";
        }else{
            echo "can not edit";
            exit;
        }
    }


    if(isset($_POST["btn"])){
        extract($_POST);
        if(empty($username) || empty($password)){
            echo "enter complete details <br>";
        }else{
            $date=date("Y-m-d H:i:s");
            $sql="update users_register set username='$username',password='$password' where id=".$_GET['id'];
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
<title>Edit Form</title>

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

    /* Back Button */
.back-btn {
    text-align: center;
    align-items: center;
    display: flex;
    margin-bottom: 15px;
    text-decoration: none;
    color: white;
    background: #444;
    padding: 8px 15px;
    border-radius: 8px;
    transition: 0.3s;
    margin-top: 3px;
}

.back-btn:hover {
    background: #222;
    transform: translateX(-3px);
}

/* Edit Button Style Upgrade */
.edit-btn {
    background: linear-gradient(135deg, #667eea, #764ba2);
    font-weight: bold;
    letter-spacing: 1px;
}

.edit-btn:hover {
    background: linear-gradient(135deg, #5a67d8, #6b46c1);
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(102,126,234,0.4);
}

</style>
</head>

<body>

<div class="container">
    <h2>Edit</h2>

    <form action="edit_user.php?id=<?php echo $user['id'] ?>" method="post">
        <div class="input-group">
            <input type="text" name="username" placeholder="Enter your name" value="<?php echo $user['username'] ?>" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Enter your password" value="<?php echo $user['password'] ?>" required>
        </div>

        <input  class="btn edit-btn" type="submit" name="btn" value="edit">
    </form>

    <a href="users.php" class="back-btn">⬅ Back</a>
</div>

    
</body>
</html>