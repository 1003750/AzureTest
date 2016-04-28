<?php
include ("db_connect.php");
$bugName = $_POST['bugName'];
$BugCategory = $_POST['BugCategory'];
$BugSummary = $_POST['BugSummary'];

$sql = "INSERT INTO bugs (bugName, BugCategory, BugSummary) VALUES ('$bugName', '$BugCategory', '$BugSummary')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:showbugs.php");
?>
