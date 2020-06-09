<?php

use TL\generics\ListType;

require_once __DIR__ . '/../vendor/autoload.php';

class Hamster{}
class Person{}

$personen = new ListType(Person::class );
$personen[] = new Person();
$personen[] = new Person();
$personen[] = new Hamster(); // Fehler

$hamster = new ListType( Hamster::class );
$hamster[] = new Hamster();
$hamster[] = new Hamster();
$hamster[] = new Person(); // Fehler

