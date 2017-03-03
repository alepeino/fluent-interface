<?php

class OrderLine
{
    private $quantity;
    private $product;
    private $skippable = false;

    public function __construct($quantity, $product)
    {
        $this->quantity = $quantity;
        $this->product = $product;
    }

    public function setSkippable($isSkippable = true)
    {
        $this->skippable = $isSkippable;
    }
}
