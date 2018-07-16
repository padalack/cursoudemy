<?php

$conn = new PDO("mysql:dbname=curso;host=localhost","root","");
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
/*
foreach ($result as $item) {
    foreach ($item as $key => $value) {
        echo "<strong>". ucfirst($key).": </strong>$value<br/>";

    }
    echo "<hr/>";

}
*/
echo json_encode($result);

