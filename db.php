<?php
require_once __DIR__ . './models/Production.php';

$production_list = [];

$productionInstance_1 = new Production("Dune", "english", 7);
$productionInstance_2 = new Production("Bienvenue chez les Ch'tis", "french", 6);
$productionInstance_3 = new Production("La vita è bella", "italian", 8);

array_push($production_list, $productionInstance_1, $productionInstance_2, $productionInstance_3);
