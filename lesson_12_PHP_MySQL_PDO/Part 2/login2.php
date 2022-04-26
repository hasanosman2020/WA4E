
<?php
require_once "pdo.php";

if (isset($_POST['email']) && isset($_POST['password'])){
echo "<p>Handling POST data...</p>\n";

$sql = "SELECT name FROM users WHERE email = :em and password = :pw";

echo "<p>$sql</p>\n";

$stmt = $pdo->prepare($sql);
$stmt->execute(array(
':em' => $_POST['email'],
':pw' => $_POST['password']
));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($row);
if ($row === FALSE){
echo "<h3>Login Incorrect</h3>\n";
} else {
echo "<p>Login Success!</p>\n";
}
}
?>

<p>Please Login</p>
<form method='post'>
<p>Email:
<input type='text' size='50' name='email'></p>
<p>Password:
<input type='text' size='50' name='password'></p>
<p><input type='submit' value='Login' />
<a href="<?php echo($_SERVER['PHP_SELF']);?>">Refresh</a></p>
</form>
<p>Check out this <a href='http://xkcd.com/327/' target='_blank'>XKCD comic that is relevant</a>



