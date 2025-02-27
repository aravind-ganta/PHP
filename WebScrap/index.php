<?php
include('simple_html_dom.php');

$html=file_get_html("http://localhost/PHP/Project_2/user.html");
echo $html->find('title',0)->plaintext;

// $html=file_get_html("https://en.wikipedia.org/wiki/PHP");

// echo $html->getElementsById('mw-panel-toc-list',0)->plaintext->save('b.txt');
?>