<?php
if(isset($POST['cancel'])){
    //Redirecting the browser to game.php
    header("Location: index.php");
    return;
}

$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1'; //Pw is meow123
$failure = false; //If we have no POST data

//Check to see if we have some POST data, if we do process it
if (isset($_POST['who']) && isset($_POST['pass'])){
    if(strlen($_POST['who']) < 1 || strlen($_POST['pass']) < 1){
        $failure = "User name and password are required.";
    } else {
        $check = hash('md5', $salt.$_POST['pass']);
        if ($check = $stored_hash){
            //Redirect the browser to game.php
            header("Location: game.php?name=".urlencode($_POST['who']));
            return;
        } else {
            $failure = "Incorrect password.";
        }
        }
    }
//Fall through into the view
?>


<!DOCTYPE html>
<html>
    <head>
        <?php require_once "bootstrap.php"; ?>
        <title>Hasan Osman's Login Page</title>
    </head>
    <body>
        <div class='container'>
            <h1>Please Log In</h1>
            <?php
            if($failure !== false){
                echo '<p style="color:red;">'.htmlentities($failure)."</p>\n";
            }
            ?>

            <form method='POST'>
                <label for='name'>Username</label>
                <input type='text' name='who' id='name'><br/>
            <label for='id_1723'>Password</label>
            <input type='text' name='pass' id='id_1723'><br/>
            <input type='submit' value='Login'>
            <input type='submit' name='cancel' value='Cancel'>
            </form>
            <p>For a password hint, view source and find a password hint in the html comments
                <!--Hint: the password is the three-letter word of this programming language (all lower case) followed by 123. -->
            </p>
        </div>
    </body>
</html>