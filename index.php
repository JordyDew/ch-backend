<?php
require_once('analyse_werkeneconomie.php');
$werk = new werkIndex();
require_once('natuur.php');
$milieu = new natuur();
require_once('mobiliteit.php');
$mobi = new mobiliteit();
require_once('analyse_zorgOverheid.php');
$zorg = new zorgIndex();

$data = [
    'Zorg_overheid' => $zorg->get(),
    'mobiliteit' => $mobi->get(),
    'Werk_en_economie' => $mobi->get(),
    'milieu' => $milieu->get()
];
echo json_encode($data);
?>