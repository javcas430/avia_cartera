<?php
$templateFinal = implode("", file("cartera2.csv"));

$templateFinal = str_replace('"""'                ,'"'              ,$templateFinal);

print_r($templateFinal);