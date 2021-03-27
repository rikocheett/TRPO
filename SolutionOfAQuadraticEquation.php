<?php

include 'SolutionEquation.php';

class SolutionOfAQuadraticEquation extends SolutionEquation
{

    public function solve($a, $b, $c)
    {
        if ($a == 0) {
           return parent::foo($b, $c);
        }
        $this->computation($a, $b, $c);
        return $this->X1;
    }

    protected function findD( $a,  $b,  $c)
    {
        return (($b * $b) - (4 * $a * $c));
    }

    protected function computation( $a,  $b,  $c)
    {
        $D = $this->findD($a, $b, $c);
        if ($D < 0) {
            return ("Error: equation does not exist");
        }
        if ($D == 0) {
            $this->X1 = array( ((-$b) / (2 * $a)));
        } elseif ($D > 0) {
            $this->X1 = array( ((-$b + sqrt($D)) / (2 * $a)), ((-$b - sqrt($D)) / (2 * $a)));
        }
    }
}