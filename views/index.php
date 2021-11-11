<?php

$templateFinal = implode("",file("../templates/index.html"));
$header = implode("",file("../templates/header.html"));

$templateFinal = str_replace("[TABLA]"                ,$header                ,$templateFinal);
$templateFinal = str_replace("[GRAFICA]"              ,$header                ,$templateFinal);
$templateFinal = str_replace("[TABLA2]"               ,$header                ,$templateFinal);
echo $templateFinal;

?>