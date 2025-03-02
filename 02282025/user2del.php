<?php
require_once "pdo.php"; 

if(isset($_POST['user_id'])){
    $sql = "DELETE FROM users WHERE user_id = :zip"; 
    echo "<pre>\n$sql\n</pre>\n"; 
    $stmt = $pdo->prepare($sql); 
    $stmt->execute(array(':zip'=>$_POST['user_id'])); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete a User</title>
</head>
<body>
    <p>Delete A User</p>
    <form method="POST">
        <p>ID to Delete: <input type="text" name="user_id"></p>
        <p>ID to Delete: <input type="submit" value="Delete"></p>
    </form>
</body>
</html>