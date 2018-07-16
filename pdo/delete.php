<?php


$conn = new PDO("mysql:dbname=curso;host=localhost","root","");
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario=?");
$id = 3;

$stmt->execute(array($id));
//$conn->rollBack();
$conn->commit();
echo "<h1>Deletado!!</h3>";