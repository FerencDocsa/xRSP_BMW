<?php
$connection = mysqli_connect('sql212.epizy.com','epiz_23015580','NnZsKkJHN9');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'epiz_23015580_logos');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}