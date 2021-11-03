<?php

require_once __DIR__.'./../vendor/autoload.php';

require __DIR__ . './Slug/MakeSlug.php';

use AbdellahRamadan\String\Slug\MakeSlug;

$slugger = new MakeSlug();

$text = $slugger->slug();

echo $text;