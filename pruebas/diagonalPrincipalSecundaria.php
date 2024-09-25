<?php
$m = array(array(1,2,3,1)
,          array(5,1,1,8)
,          array(6,1,1,9)
,          array(10,11,12,1));
$dPrincipal = 0;
$dSecundaria = 0;
for ($a = 0; $a<=3; $a++) {
    $dPrincipal = $dPrincipal+ $m[$a][$a];
    
}
echo "$dPrincipal <br>";
$n = 0;
for ($b = 3; $b>=0; $b--) {
    
    $dSecundaria = $dSecundaria + $m[$n][$b];
    $n++;
}
echo "$dSecundaria";




?>