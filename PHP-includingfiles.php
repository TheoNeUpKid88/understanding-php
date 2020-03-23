<?php
    # including external php file in another php file
    include('./PHP-common.php');

    echo "This version is ". VERSION . "\n";

    $a = 5;
    $b = 3;

    echo get_max($a, $b), "\n";

?>