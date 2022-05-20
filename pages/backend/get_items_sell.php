<?php

include_once("dbconnect.php");

$sql = "SELECT * FROM items WHERE operation = 'Купить'";
$result = $conn->prepare($sql);
$result->execute();

$response = "";

while($row = $result->fetch()) {
    echo("<div class='item'>
        <span class='item_title'>" . $row['title'] . "</span>" .
        "<span class='item_desc'>" . $row['description'] . "</span>
    </div>");
}
?>