<?php
//Note - cannot have any output before session_start()
//session_start() guarantee the $_SESSION and the new super global exists
//if isset $_SESSION is a value then its an array
//if it is not a value then we print out that session's empty and set it to 0
//the key to $_SESSIONis you can have it on the left-hand side of an assignment statement because then the value will get written onto the disk automatically
//if value is not set then we set it to zero
//if the value is less than 3 we pull the old value out and add 1 to it and send it back
//so it will be 0 first then 1 then 2;
//then if it is 3, if greater than 3 then it will go to session_destroy and session_restart ;
session_start();
if (!isset($_SESSION['pizza'])){
    echo ("<p>Session is empty</p>/n");
    $_SESSION['pizza'] = 0;
} else if ($_SESSION['pizza'] < 3){
    $_SESSION['pizza'] = $_SESSION['pizza'] + 1;
    echo "<p>Added one...</p>\n";
} else {
    session_destroy();
    session_start();
    echo "<p>Session Restarted</p>\n";
}
?>
<p><a href="sessfun.php">Click Me!</a></p>
<p>Our session id is: <?php echo(session_id()); ?></p>
<pre>
<?php print_r($_SESSION); ?>
</pre>