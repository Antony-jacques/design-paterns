<?php
include 'Usine.php';
include 'UsineFacade.php';

$usine = new UsineFacade(new Usine());
$usine->openUsine();
$usine->closeUsine();
