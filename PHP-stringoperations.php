<?php
    $sentence = "There are 22 apples";
    $alpas = 0;
    $digits = 0;
    $spaces = 0;

    $length = strlen($sentence);

    for ($i=0; $i < $length; $i++) { 
        $c = $sentence[$i];
        if(ctype_alpha($c)) $alpas++;
        if(ctype_digit($c)) $digits++;
        if(ctype_space($c)) $spaces++;
    }

    echo "There are $length characters. \n";
    echo "There are $alpas alphabetic characters. \n";
    echo "There are $digits digits.\n";
    echo "There are $spaces spaces.\n";

?>