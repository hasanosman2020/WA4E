<?php
require_once "pdo.php";
session_start();

if(isset($_POST['make']) && isset($_POST['model']) && isset($_POST['year']) && isset($_POST['mileage'])){

    //Data validation
    if (strlen($_POST['make']) < 1 || strlen($_POST['model']) < 1)



    $sql = "INSERT INTO autos [make, model, year, mileage] VALUES (:make, :model, :year, :mileage)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':make' => $_POST['make'],
        ':model' => $_POST['model'],
        ':year' => $_POST['year'],
        ':mileage' => $_POST['mileage']
    )
    );
$_SESSION['success'] = 'Record Added Successfully';
header('Location: index.php');
return;
}

//Flash pattern
if (isset($_SESSION['error'])){
    echo '<p style="color: red">'.$_SESSION['error']."</p>\n";
    unset ($_SESSION['error']);
}
?>
<p>Add A New User</p>
<form method="post">
    <p>Make
        <input type="text" name="make"></p>
    <p> Model
        <input type="text" name="model"></p>
    <p>Year
        <input type=numeric id="year" name="year" value=""></p>
    <p>Mileage
        <input type=numeric id="mileage" name="mileage" value = ""></p>
        <p><input type="submit" value= "Add New Automobile" />
        <a href=app.php>Cancel</a></p>
        </form>

    </form>