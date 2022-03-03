<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68zSnack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.  -->

<?php

$numbers = [];

while (count($numbers) !== 15) {
  $rand_num = rand(1, 50);
  if (!in_array($rand_num, $numbers)) {
    $numbers[] = $rand_num;
  }
}

var_dump($numbers);
