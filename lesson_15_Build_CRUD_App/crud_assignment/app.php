<?php
session_start();
?>
<html>
    <head></head>
    <body style='font-family: sans-serif;'>
<h1>Welcome to the Automobiles Database</h1>
<?php
if (isset($_SESSION["success"])){
    echo "<p style='color: green'>".$_SESSION['success']."</p>\n";
    unset ($_SESSION['success']);
}

//Check if we are logged in
if (isset($_SESSION["account"])){ ?>
<p>Please <a href="login.php">Log In.</a></p>
<?php } else { ?>
<p>Attempt to <a href="add.php"> add data </a>without logging in.</p>
<?php } ?>

</body>
</html>
