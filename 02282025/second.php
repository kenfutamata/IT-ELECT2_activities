<?php

$pdo=new PDO('mysql:host=localhost;port=3306;dbname=misc','root', '');

$stmt = $pdo->query("SELECT name, email, password FROM users"); 
$rows = $stmt ->fetchAll(PDO::FETCH_ASSOC);
echo '<Table border = "1">'."\n"; 
foreach ( $rows as $row ) {
    echo "<tr><td>";
    echo($row['name']);
    echo("</td><td>");
    echo($row['email']);
    echo("</td><td>");
    echo($row['password']);
    echo("</td></tr>\n");
}

echo "</table>\n";
?>