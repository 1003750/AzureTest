<?php
include("db_connect.php");
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$superpower = $_POST["superpower"];

$sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('$firstname', '$lastname', '$superpower')";

if (mysql_query($db, $sql)) {
}    else{
        echo "Error: " .$sql . "<br>" . mysql_error($db);
    }

header ("location:index.php");
?>