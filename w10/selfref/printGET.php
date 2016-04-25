<?php


$name = $_GET["name"];
$surname = $_GET["surname"];


if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
   foreach
    echo "Hello " . $name . " " . $surname;
}

?>