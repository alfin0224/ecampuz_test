<?php

    function pembagian_logic($x, $y)
    {   
        $i=0;
        $j=$x;
        do{
            $x=($x-$y);
            $i++; 
        }while(($x-$y) >= 0);
        echo $j." : ".$y." Menghasilkan Output ".$i; 
    }

    pembagian_logic(7,2);
    echo " atau ";
    pembagian_logic(8,4);
    
