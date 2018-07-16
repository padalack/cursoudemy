<?php


$conn = new PDO("mysql:dbname=curso;host=localhost","root","");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin=:login, dessenha=:senha WHERE idusuario=:id");
$login ="jose";
$senha = "zeze";
$id = 2;

$stmt->bindParam(":login",$login);
$stmt->bindParam(":senha",$senha);
$stmt->bindParam(":id",$id);
$stmt->execute();

echo "<h1>Alterado!!</h3>";
