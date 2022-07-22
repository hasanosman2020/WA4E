<?php
$guess = '';
$message = true;
if (isset($_POST['guess'])){
    //trick for integer/numeric parameters
    $guess = $_POST['guess'] + 0;
    if ($guess == 42){
        $message = 'Great job!';
    } else if ($guess < 42){
        $message = 'Too low!';
    } else {
        $message = 'Too high!';
    }
}
?>
<html>
    <head>
        <title>A Guessing Game</title>
    </head>
    <body style='font-family: sans-serif;'>
<p>Guessing Game...</p>
<?php
if ($message !== false){
    echo("<p>$message</p>\n");
}
?>
<form method='post'>
    <p><label for='guess'>Input Guess</label>
<input type='text' name='guess' id='guess' size='50'
<?php
echo 'value="'.htmlentities($guess). ' " ';
?>
/>
</p>
<input type='submit'>
</form>
</body>
</html>