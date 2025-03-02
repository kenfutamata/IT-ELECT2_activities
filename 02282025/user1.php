<?php

require_once 'pdo.php'; 

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    $sql = "INSERT INTO users (name, email, password) VALUES(:name, :email, :password)"; 
    echo("<pre>\n".$sql."\n</pre>\n"); 
    $stmt = $pdo->prepare($sql); 
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
    ));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User1.php</title>
</head>
<body>
    <p>Add a New User</p>
    <form method="post">
        <p>Name: <input type="text" name="name" size="40"></p>
        <p>Email: <input type="email" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <p><input type="Submit" value="Add New"></p>

    </form>
</body>
</html>