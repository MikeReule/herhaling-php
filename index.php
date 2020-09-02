<?php

// Vars
$getal = 1;
echo(gettype($getal));

// Oefening 1
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
var_dump($klas);

// Oefening 2
for($i = 0; $i < sizeof($klas); $i++) {
  echo $klas[$i] .PHP_EOL;
}

// Oefening 3

$bucket_list = [];
$hoeveelheid_activiteiten = readline("Hoeveel items wil je in je bucket list? ");

for($x = 1; $x <= $hoeveelheid_activiteiten; $x++) {
  $activity = readline("Welk activiteit wilt u toevoegen aan uw bucket list? ");
  array_push($bucket_list, $activity);
}

var_dump($bucket_list);

foreach($bucket_list as $activity) {
  echo $activity .PHP_EOL;
}


?>
