<?php

namespace Tests;

class Item
{
    /**
     * @var int
     */
    private $num;

    /**
     * @param int $num
     */
    public function __construct(int $num)
    {
        $this->num = $num;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }
}
