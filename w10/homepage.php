<?php

session_start();
$accesslevel = $_COOKIE['access_level'];

displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accesslevel) {
    if ($access_level == "standarduser") {
        echo "<p>You are currently logged in as a stadnard user</p>";
    }
    elseif ($access_level == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You know have access to additional administrative features</p>";
    }
}

?>