<?php
require_once 'ananlyse_werkeneconomie.php';
$werk = new werkIndex();
require_once 'natuur.php';
$milieu = new natuur();
require_once 'mobiliteit.php';
$mobi = new mobiliteit();
require_once 'analyse_zorgOverheid.php';
$zorg = new zorgIndex();
$locatie = $_GET['locatie'];

$data = array_merge($milieu->get(), $mobi->get(), $werk->get(), $zorg->get())