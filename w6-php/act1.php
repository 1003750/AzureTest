<?php
$myage=15;
if ($myname>=16) {
    print "You are allowed to buy specs only";
}
elseif ($myname>=18) {
    print "You are allowed to buy specs and mugs";
}
elseif ($myname>=21) {
    print "You are allowed to buy specs, mugs and sausage rolls";
}
else {
    print "You are not allowed to buy specs, mugs or sausage rolls";
}

echo "<br>";

$wantedgood = "mugs";

switch($wantedgood) {
    case "specs":
        echo "you must be 16 to buy specs";
        break;
    case "mugs":
        echo "you must be 18 to buy mugs";
        break;
    case "sausage rolls":
        echo "you must be 21 to buy sausage rolls";
        break;
    default:
        echo "You have not chosen a valid good";
}

$provisionedActivities = array("Specs", "Mugs", "Sausage Rolls");

foreach ($provisionedActivities as $x) {
    if ($x=="Mugs"){
        $x="Hugs";
    }
    if ($x=="Sausage Rolls"){
        $x=null;
    }
    print "<p> $x </p>";
}



?>