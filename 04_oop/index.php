<?php

require_once __DIR__  . '/Models/Person.php';
require_once __DIR__  . '/Models/Animal.php';
require_once __DIR__  . '/Models/Address.php';



$raluca_address = new Address('Via california 123', 'Los Angeles', 'ABC123', 'USA');
//$raluca_address->country; //Accessing static property Address::$country as non static
var_dump($raluca_address->getStaticCountry());



$raluca = new Person('Raluca', 'Stefan', 20, $raluca_address);
var_dump($raluca->address);
var_dump($raluca->getFullAddress());



// write a value to a class property
//$raluca->name = 'Raluca';
//$raluca->lastname = 'Stefan';

var_dump($raluca);


// write anothe object

$stan = new Person('Stanislav', 'Tryfnko', 20, new Address('Via california 123', 'Los Angeles', 'ABC123'));
//$stan->name = 'Stanislav';
//$stan->lastname = 'Tryfnko';

var_dump($stan);
//echo $stan->getName();
$stan->walk();
$raluca->walk();

// Read the object properties
var_dump($raluca->name, $raluca->lastname);
var_dump($stan->name, $stan->lastname);



$antifa = new Animal();
$antifa->type = 'Cat';
$antifa->name = 'Antifa';

var_dump($antifa);



/* Static properties and methods */

// call a static method
Person::talk();

// call a static property
var_dump(Address::$country);