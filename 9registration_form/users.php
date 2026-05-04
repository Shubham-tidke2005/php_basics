<?php 
    include("config/database.php");
    if(isset($_GET['id'])){
        $sql="delete from users_register where id=".$_GET['id'];
        $result=$conn->query($sql);
        if($result){
            //echo "edited ";
        }else{
            echo "can not delete";
            exit;
        }
    }

    $sql="select * from users_register";

    $result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User List</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Container */
.container {
    width: 90%;
    max-width: 900px;
    background: #fff;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    animation: fadeIn 0.8s ease-in-out;
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
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

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background: #667eea;
    color: white;
}

th, td {
    padding: 12px;
    text-align: center;
}

tbody tr {
    border-bottom: 1px solid #ddd;
    transition: 0.3s;
}

/* Hover row */
tbody tr:hover {
    background: #f5f7ff;
    transform: scale(1.01);
}

/* Buttons */
.btn {
    padding: 6px 12px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    color: white;
    transition: 0.3s;
}

/* Edit Button */
.edit {
    background: #667eea;
}

.edit:hover {
    background: #5a67d8;
    transform: scale(1.1);
}

/* Delete Button */
.delete {
    background: #e53e3e;
}

.delete:hover {
    background: #c53030;
    transform: scale(1.1);
}

/* Responsive */
@media (max-width: 600px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }

    thead {
        display: none;
    }

    tr {
        margin-bottom: 15px;
        background: #fff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    td {
        text-align: left;
        padding: 10px;
        position: relative;
    }

    td::before {
        content: attr(data-label);
        font-weight: bold;
        display: block;
        color: #667eea;
        margin-bottom: 5px;
    }
}
</style>
</head>

<body>

<div class="container">
    <h2>User List</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <!-- Row 1 -->
             <?php 
             if($result->num_rows>0){
               
                while($curr_user=$result->fetch_assoc()){
                
             ?>
            <tr>
            
                <td data-label="ID"><?php echo ($curr_user["id"]) ?></td>
                <td data-label="Username"><?php echo ($curr_user["username"]) ?></td>
                <td data-label="Created At"><?php echo ($curr_user["created_at"]) ?></td>
                <td data-label="Actions">
                    <a href="edit_user.php?id=<?php echo $curr_user["id"]?>" class="btn edit">Edit</a>
                    <a href="users.php?id=<?php echo $curr_user["id"]?>" class="btn delete">Delete</a>
                </td>

            
            </tr>
            <?php 
                }
             }

             else{
            ?>
                <td data-label="ID" colspan="4">users not present </td>
            <?php
             }
             ?>


        </tbody>
    </table>
</div>

</body>
</html>