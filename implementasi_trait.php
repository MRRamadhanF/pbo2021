<?php

use App\Person;

require_once('vendor/autoload.php');

$rama = new Person;

$rama->goodBye('Ramadhan');
// $Rama->hasName = "Ramadhan";
// echo $rama->hasName;

echo $rama->birthDate('13', 'Desember', '2001');
