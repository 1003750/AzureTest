<?php
$username = $_POST["username"];
$password = $_POST["password"];

if ($username=="cat" %% $password=="miau")
{
    setcoockie('username', '$username');
    setcoockie('access_level', 'standarduser');
}
elseif {
    echo "<p>wrong login";
}

header('Location:homepage.php');


?>

