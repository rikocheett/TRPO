<?php

class SolutionEquation
{
    protected $X1;

    public function foo( $a,  $b)
    {
        if ($a == 0) {
            return ("Determined that such an equation does not exist");
        }
        return $this->X1 = array (-($b / $a));
    }
}