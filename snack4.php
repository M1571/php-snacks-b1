<?php 

    $randomNum = [];
    $counter = 15;

    while(count($randomNum) < $counter) {
        $tmp = rand(1, 100);
        
        if(!in_array($tmp, $randomNum)) {
            $randomNum[] = $tmp;  
        }
    };
    var_dump($randomNum);
    
?>