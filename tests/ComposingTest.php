<?php

namespace Tests;

class ComposingTest extends \PHPUnit_Framework_TestCase
{
    public function testLogicSpecifications()
    {
        $greater = (new GreaterSpecification())->setNum(50);
        $lower = (new LowerSpecification())->setNum(50);

        $item1 = new Item(50);
        $item2 = new Item(25);
        $item3 = new Item(75);

        $this->assertFalse($greater->andX($lower)->isSatisfiedBy($item1));
        $this->assertFalse($greater->andX($lower)->isSatisfiedBy($item2));
        $this->assertFalse($greater->andX($lower)->isSatisfiedBy($item3));

        $this->assertFalse($greater->orX($lower)->isSatisfiedBy($item1));
        $this->assertTrue($greater->orX($lower)->isSatisfiedBy($item2));
        $this->assertTrue($greater->orX($lower)->isSatisfiedBy($item3));

        $this->assertFalse($greater->xorX($lower)->isSatisfiedBy($item1));
        $this->assertTrue($greater->xorX($lower)->isSatisfiedBy($item2));
        $this->assertTrue($greater->xorX($lower)->isSatisfiedBy($item3));

        $this->assertFalse($greater->andX($lower->notX())->isSatisfiedBy($item1));
        $this->assertTrue($greater->andX($lower->notX())->isSatisfiedBy($item2));
        $this->assertFalse($greater->andX($lower->notX())->isSatisfiedBy($item3));

        $this->assertFalse($greater->notX()->andX($lower)->isSatisfiedBy($item1));
        $this->assertFalse($greater->notX()->andX($lower)->isSatisfiedBy($item2));
        $this->assertTrue($greater->notX()->andX($lower)->isSatisfiedBy($item3));
    }
}
