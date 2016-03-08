<?php

$nameList = array(aa, bb, cc, dd, ee, ff, gg, hh, ii, jj, kk, ll, mm, nn, oo);
rsort($nameList);
$winSpecs = rand($nameList);
strtoupper($winSpecs);
echo $winSpecs;
echo "test";

?>