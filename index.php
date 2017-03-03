<?php
// https://www.martinfowler.com/bliki/ExpressionBuilder.html

require_once 'Customer.php';
require_once 'Order.php';
require_once 'OrderBuilder.php';
require_once 'OrderLine.php';

function makeNormal(Customer $customer) {
    $o1 = new Order();
    $customer->addOrder($o1);
    $line1 = new OrderLine(6, "TAL");
    $o1->addLine($line1);
    $line2 = new OrderLine(5, "HPK");
    $o1->addLine($line2);
    $line3 = new OrderLine(3, "LGV");
    $o1->addLine($line3);
    $line2->setSkippable(true);
    $o1->setRush(true);
}

function makeFluent(Customer $customer) {
  $customer->newOrder()
    ->with(6, "TAL")
    ->with(5, "HPK")->skippable()
    ->with(3, "LGV")
    ->priorityRush();
}
