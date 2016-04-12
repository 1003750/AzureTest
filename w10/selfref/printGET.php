<?php


$name = $_GET["name"];
$surname = $_GET["surname"];


if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
   echo "Hello" . $name . $surname;
}


?>