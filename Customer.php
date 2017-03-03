<?php

class Customer
{
    public $orders = [];

    public function addOrder(Order $order)
    {
        $this->orders[] = $order;
    }

    public function newOrder()
    {
        $order = new Order();

        $this->addOrder($order);

        return $order;
    }
}
