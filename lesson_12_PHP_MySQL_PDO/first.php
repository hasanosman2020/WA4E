<?php
echo "<pre>\n";
$pdo = new PDO('mysql:host=localhost;dbname=misc', 'osman', 'zap');
$stmt = $pdo->query("SELECT * FROM users");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
print_r($row);
echo "</pre>\n";
}
?>

/*
Array
(
    [0] => Array
        (
            [user_id] => 1
            [name] => Hasan
            [email] => hasan@hotmail.com
            [password] => 123
        )

    [1] => Array
        (
            [user_id] => 2
            [name] => Edward
            [email] => edward@hotmail.com
            [password] => 456
        )

    [2] => Array
        (
            [user_id] => 3
            [name] => Amna
            [email] => amna@hotmail.com
            [password] => 789
        )

)


*/
