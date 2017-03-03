<?php

class TestEquals extends PHPUnit\Framework\TestCase
{
    public function testEq()
    {
      $normal = new Customer();
      makeNormal($normal);

      $fluent = new Customer();
      makeFluent($fluent);

      $normal->orders[0]->clearBuilder();
      $fluent->orders[0]->clearBuilder();
      
      $this->assertEquals($normal, $fluent);
    }
}
