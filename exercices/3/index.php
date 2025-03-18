<?php
require_once('../3/classes/Cercle.php');
require_once('../../function/functions.php');

$cercle = new cercle(20, "aire");
$cercle->aire();

show($cercle);