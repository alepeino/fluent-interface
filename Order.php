<?php

class Order
{
    private $lines = [];
    private $rush = false;
    private $builder;

    public function __construct()
    {
        $this->builder = new OrderBuilder($this);
    }

    public function clearBuilder()
    {
        $this->builder = null;
    }

    public function addLine(OrderLine $line)
    {
        $this->lines[] = $line;
    }

    public function setRush($isRush = true)
    {
        $this->rush = $isRush;
    }

    public function __call($method, $args)
    {
        if (method_exists($this->builder, $method)) {
            return $this->builder->$method(...$args);
        }

        throw new Exception("Method $method not implemented");
    }
}
