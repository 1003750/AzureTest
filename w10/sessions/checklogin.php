<?php

$username = $_POST["username"];
$password = $_POST["password"];


if ($username=="cat" && $password=="miau")
{
    session_start();
    $_SESSION['access_level'] = 'standarduser';
}

header('Location: homepage.php');


?>

