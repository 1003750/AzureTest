<?php

$nameList = array(aa, bb, cc, dd, ee, ff, gg, hh, ii, jj, kk, ll, mm, nn, oo);
rsort($nameList);
$winningnumber = rand(1, 15);
echo $winningnumber;
$winSpecs = $nameList[$winningnumber];
strtoupper($winSpecs);
echo $winSpecs;
echo "test";

?>