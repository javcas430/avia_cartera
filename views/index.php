<?php

$templateFinal = implode("",file("../templates/index.html"));
$header = implode("",file("../templates/header.html"));

$templateFinal = str_replace(
                            "[NAV]",
                            $header, 
                            $templateFinal
                        );
echo $templateFinal;

?>