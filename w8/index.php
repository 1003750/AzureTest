<?php
$db = new mysqli(
    "eu-cdbr-azure-north-d.cloudapp.net",
    "b8522d73b537a0",
    "b0f6819e",
    "slq654"
);

if ($db->connect_errno) {
    die('Connectfailed['.$db->connect_error.']');
}