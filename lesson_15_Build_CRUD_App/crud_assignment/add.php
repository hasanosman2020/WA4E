<?php
require_once "pdo.php";
session_start();
if(isset($_POST['make']) && isset($_POST['model']) && isset($_POST['year']) && isset($_POST['mileage'])){
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
?>