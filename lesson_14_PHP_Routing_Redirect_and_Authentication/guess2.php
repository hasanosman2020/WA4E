<?php
session_start();
if (isset($_POST['guess'])){
    $guess = $_POST['guess'] + 0;
    $_SESSION['guess'] = $guess;
    if ($guess == 42){
        $_SESSION['message'] = 'Great job man!';
} else if ($guess < 42){
    $_SESSION['message'] = 'Too low man!';
} else {
    $_SESSION['message'] = 'Way too high man!';
}
header('Location: guess2.php');
return;
}
?>

<html>
    <head>
        <title>A Guessing Game</title>
    </head>
    <body style='font-family:sans-serif;'>
<?php
$guess = isset($_SESSION['guess']) ? $_SESSION['guess'] : '';
$message = isset($_SESSION['message']) ? $_SESSION['message'] : false;
?>
<p>Guessing Game...</p>
<?php
if($message !== false){
    echo("<p>$message</p>\n");
}
?>
<form method='post'>
    <p><label for='guess'>Input Guess</label></p>
    <input type='text' name='guess' id='guess' size='50'
    <?php echo 'value="' . htmlentities($guess).' " ';?>
    /></p>
    <input type='Submit' />
</form>
</body>
</html>