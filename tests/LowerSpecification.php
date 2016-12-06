<?php

namespace Tests;

use Krocos\CompositeSpecification\CompositeSpecification;

class LowerSpecification extends CompositeSpecification
{
    /**
     * @var int
     */
    private $num;

    /**
     * @param int $num
     *
     * @return LowerSpecification
     */
    public function setNum(int $num): LowerSpecification
    {
        $this->num = $num;

        return $this;
    }

    public function isSatisfiedBy($candidate): bool
    {
        /** @var Item $candidate */
        return $this->num < $candidate->getNum();
    }
}
