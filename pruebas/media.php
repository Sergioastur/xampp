<?php
    $num = 0;
    $media = 0.0;
    for ($i = 0; $i<=4; $i++) {
        
        $num = $num+10;
        $M[$i] = $num;
        $media = $media+$num;
    }
	
    $media = $media/5;

    echo "La media es $media";
?>