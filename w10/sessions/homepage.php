<?php

session_start();
$accesslevel = $_SESSION['access_level'];

displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accesslevel)
{
    if ($accesslevel=="standarduser") {
        echo "<p>You are currently logged in as a stadnard user</p>";
    }
    elseif ($accesslevel=="root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You know have access to additional administrative features</p>";
    }
}

?>