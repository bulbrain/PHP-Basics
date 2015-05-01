<?php
require "PrintTags.html";
if(isset($_GET["submit"])) {
    $text = htmlentities($_GET["tags"]);
    $text = explode(", ", $text);
    for($i = 0; $i < count($text); $i++) {
        echo "$i : " . $text[$i] . "<br>";
    }
}
?>