<?php

include_once("dbconnect.php");

$type = $_POST['type'];

$sql = "SELECT * FROM items WHERE operation = 'Купить' ORDER BY date " . $type;
$result = $conn->prepare($sql);
$result->execute();

$response = "";

while($row = $result->fetch()) {
    $response .= "<div class='item'>
        <span class='item_title'>" . $row['title'] . "</span>" .
        "<span class='item_desc'>" . $row['description'] . "</span>
    </div>";
}

echo($response);
?>