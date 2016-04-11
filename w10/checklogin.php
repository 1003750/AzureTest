<?php

$username = $_POST["username"];
$password = $_POST["password"];


if ($username=="cat" && $password=="miau")
{
    setcookie('username', 'cat');
    setcookie('access_level', 'standarduser');
}

header('Location: homepage.php');


?>

