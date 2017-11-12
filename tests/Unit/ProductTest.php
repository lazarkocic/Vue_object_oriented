<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class ProductTest extends TestCase
{
    protected $product;

    public function setUp()
    {
      $this->product = new Product('Chips', 40);
    }

    /** @test */
    public function a_product_has_a_name()
    {
      $this->assertEquals($this->product->name(), 'Chips');
    }

    /** @test */
    public function a_product_has_a_cost()
    {
      $this->assertEquals($this->product->cost(), 40);
    }
}
