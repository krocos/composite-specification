<?php

namespace Krocos\CompositeSpecification\Specification;

use Krocos\CompositeSpecification\CompositeSpecification;
use Krocos\CompositeSpecification\Satisfiable;

class XorSpecification extends CompositeSpecification
{
    /**
     * @var Satisfiable
     */
    private $leftCondition;
    /**
     * @var Satisfiable
     */
    private $rightCondition;

    public function __construct(Satisfiable $left, Satisfiable $right)
    {
        $this->leftCondition = $left;
        $this->rightCondition = $right;
    }

    public function isSatisfiedBy($candidate): bool
    {
        return $this->leftCondition->isSatisfiedBy($candidate) xor $this->rightCondition->isSatisfiedBy($candidate);
    }
}
