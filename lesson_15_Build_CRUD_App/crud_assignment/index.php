<?php
require_once "pdo.php";
session_start();
?>
<html>
    <head></head><body>
        <?php
        if (isset($_SESSION['error'])){
            echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
            unset($_SESSION['error']);
        };
        if (isset($_SESSION['success'])){
            echo '<p style="color:red">'.$_SESSION['success']."</p>\n";
            unset($_SESSION['success']);
        }
        echo ('<table border="1">'."\n");
        $stmt = $pdo->query("SELECT autos_id, make, model, year, mileage FROM autos");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>";
            echo htmlentities($row['make']);
            echo "</td><td>";
            echo htmlentities($row['model']);
            echo "</td><td>";
            echo htmlentities($row['year']);
            echo "</td><td>";
            echo htmlentities($row['mileage']);
            echo "</td><td>";
            //echo('<a href="edit.php?user_id='.$row['user_id'].'">Edit</a> / ');
            //echo('<a href="delete.php?user_id='.$row['user_id'].'">Delete</a>');

            echo "</td></tr>";
        }
        ?>
        </table>
        <a href='add.php'>Add New</a>
            
            
            
            
           