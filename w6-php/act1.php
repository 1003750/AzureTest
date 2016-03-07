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
?>