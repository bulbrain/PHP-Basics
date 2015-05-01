<?php
    $var1 = "hello";
    $var2 = 15;
    $var3 = 1.234;
    $var4 = array(1, 2, 3);
    $var5 = (object)[2,34];
    if(is_numeric($var1)) {
        echo var_dump($var1);
    } else {
        echo gettype($var1);
    }
?>