<?php
session_start();
$_SESSION["counter"] = 0;
require "HTMLTagsCounter.html";
$htmlTags = array('html', 'head', 'title', 'base', 'link', 'meta', 'style',
    'script', 'noscript', 'template', 'body', 'section', 'nav',
    'article', 'aside', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
    'header', 'footer', 'address', 'main', 'p', 'hr', 'pre',
    'blockquote', 'ol', 'ul', 'li', 'dl', 'dt', 'figure',
    'figcaption', 'div', 'a', 'em', 'strong', 'small', 's',
    'cite', 'q', 'dfn', 'abbr', 'data', 'time', 'code', 'var',
    'samp', 'kbd', 'sub', 'sup', 'i', 'b', 'u', 'mark', 'ruby',
    'rt', 'rp', 'bdi', 'bdo', 'span', 'br', 'wbr', 'ins', 'del',
    'img', 'iframe', 'embed', 'object', 'param', 'video', 'audio',
    'source', 'track', 'canvas', 'map', 'area', 'svg', 'math',
    'table', 'caption', 'colgroup', 'col', 'tbody', 'thead',
    'tfoot', 'tr', 'td', 'th', 'form', 'fieldset', 'legend',
    'label', 'input', 'button', 'select', 'datalist', 'optgroup',
    'option', 'textarea', 'keygen', 'output', 'progress',
    'meter', 'details', 'summary', 'menuitem', 'menu');
if(isset($_POST['submit'])) {
    $tag = $_POST['tags'];
    $count = 0;
    for ($i = 0; $i < 111; $i++) {
        if ($htmlTags[$i] == $tag) {
            $count++;
        }
    }
    if($count > 0) {
        echo "<h2>Valid HTML tag!</h2>";
        $_SESSION['count']++;
        echo "<h2>" . "Score: " . $_SESSION['count'] . "</h2>";
    } else {
        echo "<h2>Invalid HTML tag!</h2>";
        echo "<h2>" . "Score: " . $_SESSION['count'] . "</h2>";
    }
}
?>