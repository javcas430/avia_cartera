<?php

$templateFinal = implode("",file("../templates/index.html"));
$tabla = implode("",file("../templates/tabla.html"));

$templateFinal = str_replace("[TABLA]"                ,$tabla                ,$templateFinal);
$templateFinal = str_replace("[GRAFICA]"              ,$tabla                ,$templateFinal);
$templateFinal = str_replace("[TABLA2]"               ,$tabla                ,$templateFinal);
echo $templateFinal;

?>