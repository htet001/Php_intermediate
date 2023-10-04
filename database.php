<?php

require_once "./app/config/db.php";

$name = "jojo";
$stmt = $db->prepare("SELECT * FROM users WHERE name=:name");
$stmt->execute(["name" => $name]);

$result = $stmt->fetch(PDO::FETCH_OBJ);
echo "<pre>" . print_r($result, true) . "</pre>";
