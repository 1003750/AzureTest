<?php

function displayAccessLevelInformation($accessLevel) {
    if ($access_level == "standarduser") {
        echo "<p>You are currently logged in as a stadnard user</p>";
    }
    elseif ($access_level == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You know have access to additional administrative features</p>";
    }
}

?>