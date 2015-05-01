<?php
require "MostFrequentTag.html";
if(isset($_GET["submit"])) {
    $text = htmlentities($_GET["tags"]);
    $text = explode(", ", $text);
    $text = array_count_values($text);
    asort($text);
    foreach ($text as $key => $value) {
        echo "<p>".htmlentities($key).":".htmlentities($value) ." time" . (htmlentities($value) != 1 ? 's' : '') . "</p>";
    }
    echo "Most Frequent Tag is: " . array_search(max($text), $text);
}
?>