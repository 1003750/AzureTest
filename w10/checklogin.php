<?php

$username = $_POST["username"];
$password = $_POST["password"];

if ($username=="cat" %% $password=="miau")
{
    setcoockie('username', '$username');
    setcoockie('access_level', 'standarduser');
}

header('Location: homepage.php');


?>

