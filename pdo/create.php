<?php


$conn = new PDO("mysql:dbname=curso;host=localhost","root","");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:login,:senha)");
$login ="kaka";
$senha = "123456789";
$stmt->bindParam(":login",$login);
$stmt->bindParam(":senha",$senha);
$stmt->execute();

echo "<h1>Inserido!!</h3>";
