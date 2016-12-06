<?php

namespace Tests;

use Krocos\CompositeSpecification\CompositeSpecification;

class GreaterSpecification extends CompositeSpecification
{
    /**
     * @var int
     */
    private $num;

    /**
     * @param int $num
     *
     * @return GreaterSpecification
     */
    public function setNum(int $num): GreaterSpecification
    {
        $this->num = $num;

        return $this;
    }

    public function isSatisfiedBy($candidate): bool
    {
        /** @var Item $candidate */
        return $candidate->getNum() < $this->num;
    }
}
