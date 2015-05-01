<?php
$n = 1234;
if ($n >1000) {
    $n = 1000;
}
if ($n >= 100) {
    for ($i = 100; $i < $n + 1; $i++) {
        $firstDigit = (int)($i / 100);
        $secondDigit = (int)(($i / 10) % 10);
        $thirdDigit = ($i % 100) % 10;
        if($firstDigit != $secondDigit && $secondDigit != $thirdDigit && $firstDigit != $thirdDigit) {
                    echo $i . ', ';
        };
    }
} else {
    echo 'no';
}
?>