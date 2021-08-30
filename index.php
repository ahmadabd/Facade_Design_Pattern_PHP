<?php

use App\Hash;

require_once __DIR__.'/vendor/autoload.php';

ini_set('display_error', 1);

$hashedValue = Hash::md5('slm');

var_dump($hashedValue);