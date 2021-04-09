<?php

require __DIR__ . "/vendor/autoload.php";

use zaytsev\solutionOfAQuadraticEquation;
use zaytsev\ZaytsevException;
use zaytsev\ZaytsevLog;

$vers = file_get_contents('version');

ZaytsevLog::log('Program version: ' . trim($vers));
echo "Enter 3 parameters: " .PHP_EOL;
$a = (float)readline("a = ");
$b = (float)readline("b = ");
$c = (float)readline("c = ");

ZaytsevLog::log("The equation: " . $a . "X^2 + " . $b . "X + " . $c . " = 0" . PHP_EOL);

try
{
    $SolutionOfAQuadraticEquation = new SolutionOfAQuadraticEquation();
    $res = $SolutionOfAQuadraticEquation->solve((float)$a, (float)$b, (float)$c);
    foreach ($res as $el)
    {
        ZaytsevLog::log($el);
    }
}
catch (ZaytsevException $e)
{
    ZaytsevLog::log($e->getMessage() . PHP_EOL);
}
ZaytsevLog::write();
