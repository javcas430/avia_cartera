<?php

$usuario = implode("", file("../templates/user-profile.html"));
$userTabla = implode("", file("../templates/user-table.html"));
$usuario = str_replace("[USER-TABLA]", $userTabla, $usuario);
echo $usuario;

