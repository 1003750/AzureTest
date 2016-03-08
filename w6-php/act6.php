<?php

$nameList = array(aa, bb, cc, dd, ee, ff, gg, hh, ii, jj, kk, ll, mm, nn, oo);
rsort($nameList);
$winningnumber = rand(0, 14);

print "winner of all the specs is " . strtoupper($nameList[$winningnumber]);

// unset $nameList[$winnernumber];
// printmyArray($nameList);
?>