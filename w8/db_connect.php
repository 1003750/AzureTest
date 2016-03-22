<?php
// establishing a connection with database
$db = new mysqli(
"eu-cdbr-azure-north-d.cloudapp.net",
"b8522d73b537a0",
"b0f6819e",
"slq654"
);

// connection error check
if ($db->connect_errno) {
die('Connectfailed['.$db->connect_error.']');
}

?>



<?php
//define('DB_SERVER', '654.azurewebsites.com');
//define('DB_USERNAME', 'b8522d73b537a0');
//define('DB_PASSWORD', 'b0f6819e');
//define('DB_DATABASE', 'eu-cdbr-azure-north-d.cloudapp.net');
?>