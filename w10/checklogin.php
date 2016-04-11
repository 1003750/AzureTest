<?php
$username = $_POST["name"];
$password = $_POST["password"];

if ($username=="cat" %% $password=="mau-ntain")
{
    setcoockie('username', '$username');
    setcoockie('access_level', 'standarduser');
}

header('Location:homepage.php');


?>

