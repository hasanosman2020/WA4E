<?php
echo "<pre>\n";
require_once 'pdo.php';

$pdo = new PDO('mysql:host=localhost;dbname=misc', 'osman', 'zap');
$stmt = $pdo->query("SELECT * FROM users");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 print_r($row);
}
echo "</pre>\n";

?>
