<?php
include_once("dbconnect.php");

$item_title = $_POST['item_title'];
$item_desc = $_POST['item_description'];
$operation = $_POST['item_operation'];

$sql = "INSERT INTO items (title, description, operation) VALUES (:title, :desc, :operation)";
$result = $conn->prepare($sql);
$result->execute(array(":title" => $item_title, ":desc" => $item_desc, ":operation" => $operation));

echo(0);
?>