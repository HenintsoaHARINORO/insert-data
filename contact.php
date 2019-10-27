<?php
var_dump($data);
$pdo = new PDO('mysql:host=localhost;dbname=library', 'root', '', [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
]);
$data = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname']

];
$sql = "INSERT INTO contact (email, password,firstname,lastname) VALUES (:email, :password, :firstname,:lastname)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);