<?php
require("db.php");

$sql = "INSERT INTO stav(popis) VALUES('Posudek byl zpristupnen autorovi') ";
$result = mysqli_query($connection, $sql);



echo $sql;

?>

