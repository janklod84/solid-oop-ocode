<?php 

require_once __DIR__.'/autoload.php';

// $car = new Car();
// $car = new Astra();
$car = new Beetle();

$driver = new Driver($car);

$driver->go();