<?php

require 'string/Slug/MakeSlug.php';
require 'string/Cases/StringCases.php';

use AbdellahRamadan\String\Slug\MakeSlug;
use AbdellahRamadan\String\Cases\StringCases;

$slugger = new MakeSlug();
$url = $slugger->slug('Hi Ramadan Njikam 95');

$cases = new StringCases();
$camelToSnake = new StringCases();

$stringCase = $cases->camelToSnakeCase('Hello snake case');
$camel = $camelToSnake->camelToSnakeCase('hi brother 3 sddfd');

echo $url . "\t\n";
echo $camel . "\t\n";

echo $stringCase . "\t\n";
