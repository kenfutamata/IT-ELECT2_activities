<?php

require_once "pdo.php"; 

if ( isset($_POST['email']) && isset($_POST['password']) ) {
    $e = $_POST['email'];
    $p = $_POST['password'];
    $sql = "SELECT name FROM users
         WHERE email = '$e'
         AND password = '$p'";
    $stmt = $pdo->query($sql);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
if ( isset($_POST['email']) && isset($_POST['password']) ) {
    if($user){
        echo ("Login Success");
    }else{
        echo ("Login Failed");
    }
}
?>
<p>Please Login</p>
    <form method="post">
        <p>Email: <input type="email" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <p><input type="Submit" value="Login"></p>

    </form>
</body>
</html>