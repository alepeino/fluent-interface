<?php

class OrderBuilder
{
    private $order;
    private $line;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function with(...$args)
    {
        $this->line = new OrderLine(...$args);
        $this->order->addLine($this->line);

        return $this->order;
    }

    public function skippable(...$args)
    {
        $this->line->setSkippable(...$args);

        return $this->order;
    }

    public function priorityRush(...$args)
    {
        $this->order->setRush(...$args);

        return $this->order;
    }
}
