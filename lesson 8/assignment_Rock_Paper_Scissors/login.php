<?php
if(isset($POST['cancel'])){
    //Redirecting the browser to game.php
    header("Location: index.php");
    return;
}

$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1'; //Pw is meow123
$failure = false; //If we have no POST data

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
                <!--Hint: the password is the four character sound a cat makes (all lower case) followed by 123. -->
            </p>
        </div>
    </body>
</html>