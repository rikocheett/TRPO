<?php

namespace zaytsev;
use core\EquationInterface;
include 'core\EquationInterface.php';
include 'SolutionEquation.php';
include 'ZaytsevException.php';

class SolutionOfAQuadraticEquation extends SolutionEquation implements EquationInterface
{

    public function solve(float $a, float $b, float $c):array
    {
        if ($a == 0) {
            return parent::foo($b, $c);
        }
        $this->computation($a, $b, $c);
        return $this->X1;
    }

    protected function findD(float $a, float $b, float $c)
    {
        return (($b * $b) - (4 * $a * $c));
    }

    protected function computation(float $a, float $b, float $c)
    {
        $D = $this->findD($a, $b, $c);
        if ($D < 0) {
            throw new ZaytsevException("Error: equation does not exist");
        }
        ZaytsevLog::log("Determined to be a quadratic equation" . PHP_EOL . "Equation roots:" . PHP_EOL);
        if ($D == 0) {
            $this->X1 = array( ((-$b) / (2 * $a)));
        } elseif ($D > 0) {
            $this->X1 = array( ((-$b + sqrt($D)) / (2 * $a)), ((-$b - sqrt($D)) / (2 * $a)));
        }
    }
}