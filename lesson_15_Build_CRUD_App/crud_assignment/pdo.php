<?php
$pdo = new PDO('mysql:host=localhost;dbname=wa4e_crud_assignment;charset=utf8', 'hasan', 'dinah');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);