<?php
$pdo = new PDO('mysql:host=localhost;dbname=wa4e_crud_assignment;charset=utf8', 'umsi@umich.edu', 'php123');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);