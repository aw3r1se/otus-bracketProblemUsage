<?php

require_once __DIR__.'/../vendor/autoload.php';
use BracketProblem\BracketString;

$string = '(1 + 2) * 3)';
$bracketString = new BracketString($string);
var_dump($bracketString->isValid());
