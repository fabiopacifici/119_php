<?php

var_dump('hello php command line');

echo 'Ciao';
/* var_dump($argv);

var_dump($argv[1]);
var_dump($argc); */


$folder = $argv[1];
echo `mkdir $folder`; // mkdir html
