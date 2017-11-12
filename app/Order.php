<?php

namespace App;

class Order {

  protected $products;

  public function __construct()
  {
    $this->products = [];
  }

  public function add(Product $product)
  {
    array_push($this->products, $product);
  }

  public function products()
  {
    return $this->products;
  }

  // public function count()
  // {
  //   return count($this->products);
  // }
}

?>
