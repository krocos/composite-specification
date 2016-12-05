<?php

namespace Krocos\CompositeSpecification;

interface Satisfiable
{
    public function isSatisfiedBy($candidate): bool;

    public function andX(Satisfiable $other): Satisfiable;

    public function orX(Satisfiable $other): Satisfiable;

    public function xorX(Satisfiable $other): Satisfiable;

    public function notX(): Satisfiable;
}
