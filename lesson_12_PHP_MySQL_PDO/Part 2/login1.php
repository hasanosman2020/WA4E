
<?php
require_once "pdo.php";

if (isset($_POST['email']) && isset($_POST['password'])){
echo "<p>Handling POST data...</p>\n";
$e = $_POST['email'];
$p = $_POST['password'];

$sql = "SELECT name FROM users WHERE email = '$e' and password = '$p'";

echo "<p>$sql</p>\n";

$stmt = $pdo->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($row);
echo "-->\n";
if ($row === FALSE){
echo "<h3>Login Incorrect</h3>\n";
} else {
echo "<h3>Login Success!</h3>\n";
}
}



?>
<p>Please Login</p>
<form method='post'>
<p>Email:
<input type='text' size='50' name='email'></p>
<p>Password:
<input typed='text' size='50' name='password'></p>
<p><input type='submit' value='Login' />
<a href="<?php echo($_SERVER['PHP_SELF']);?>">Refresh</a></p>
</form>
<p>Check out this <a href='http://xkcd.com/327/' target='_blank'>XKCD comic that is relevant.</a></p>








