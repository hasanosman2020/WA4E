<?php
session_start();
if (isset($_POST["email"]) && isset($_POST["password"])){
    unset($_SESSION["email"]); //logout current user
    if ($_POST["password"] == 'hasan'){
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["success"] = "Logged In";
        header("Location: index.php");
        return;
    } else {
        $_SESSION["error"] = "Incorrect password.";
        header ("Location: login.php");
        return;
    }
}
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
    <script type='text/javascript' src='config.js'></script>    
    </head>
    <body>
        <div class='container' id='main-content'>
            <h1>Please Login</h1>
            <!-- flash error message-->
            <?php
            if (isset($_SESSION["error"])){
                echo '<p style="color: red">'.$_SESSION["error"]."</p>\n";
                unset($_SESSION["error"]);
            }
            if (isset($_SESSION["success"])){
                echo '<p style="color: green">'.$_SESSION["success"]."</p>\n";
                unset($_SESSION["success"]);
            }
            ?>
            <form method="post">
            <label for="txt_email">Username</label>
            <input type="text" name="email" id="txt_email"><br />
            <label for="txt_password">Password</label>
            <input type="password" name="password" id="txt_password"><br />
            <!--password is hasan-->
            <p><input type="submit" value="Log In" name="login"><a href="app.php">Cancel</a></p>
            
            </form>
        </div>
    </body>
</html>