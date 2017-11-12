<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;
use App\Order;

class OrderTest extends TestCase
{
    /** @test */
    public function an_order_consists_of_products()
    {
      $order = new Order;

      $product1 = new Product('chips', 30);
      $product2 = new Product('flips', 40);

      $order->add($product1);
      $order->add($product2);

      $this->assertCount(2, $order->products());
    }
}
