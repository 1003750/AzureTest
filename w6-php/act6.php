<?php

$nameList = array(aa, bb, cc, dd, ee, ff, gg, hh, ii, jj, kk, ll, mm, nn, oo);
rsort($nameList);
$winningnumber = rand(0, 14);

print "the winner of all the specs is " . strtoupper($nameList[$winningnumber]);

unset ($nameList[$winningnumber]);
printmyArray($nameList);
?>