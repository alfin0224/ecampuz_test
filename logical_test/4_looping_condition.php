<?php

    $x=1;
    while($x <= 50) {
        if($x % 3 == 0){
            echo $x.". Foo <br>";
        }else if($x % 5 == 0){
            echo $x.". Bar <br>";
        }else if($x % 3 == 0 && $x % 5 == 0){
            echo $x.". FooBar <br>";
        }else {
            echo $x.". <br>";
        }
        $x++;
    } 

?>