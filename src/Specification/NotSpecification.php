<?php

namespace Krocos\CompositeSpecification\Specification;

use Krocos\CompositeSpecification\CompositeSpecification;
use Krocos\CompositeSpecification\Satisfiable;

class NotSpecification extends CompositeSpecification
{
    /**
     * @var Satisfiable
     */
    private $condition;

    public function __construct(Satisfiable $x)
    {
        $this->condition = $x;
    }

    public function isSatisfiedBy($candidate): bool
    {
        return !$this->condition->isSatisfiedBy($candidate);
    }
}
