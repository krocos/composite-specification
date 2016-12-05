<?php

namespace Krocos\CompositeSpecification;

use Krocos\CompositeSpecification\Specification\{
    AndSpecification, NotSpecification, OrSpecification, XorSpecification
};

abstract class CompositeSpecification implements Satisfiable
{
    public abstract function isSatisfiedBy($candidate): bool;

    public function andX(Satisfiable $other): Satisfiable
    {
        return new AndSpecification($this, $other);
    }

    public function orX(Satisfiable $other): Satisfiable
    {
        return new OrSpecification($this, $other);
    }

    public function xorX(Satisfiable $other): Satisfiable
    {
        return new XorSpecification($this, $other);
    }

    public function notX(): Satisfiable
    {
        return new NotSpecification($this);
    }
}
