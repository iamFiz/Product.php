<?php
class Product{
   public $id;
   public $name;
   public $price;

   public function __construct($id,$name,$price){
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
   }

   function getFormattedPrice($price){
    $this->price = sprintf('%.2f', $price);
    return $this->price;
   }

   function showDetails(){
    $heredoc = <<<EOD
    Product Details:
    - ID: {$this->id}
    - Name: {$this->name}
    - Price: \${$this->price}
    EOD;
    return $heredoc;
   }

}

$product = new Product(1, 'T-shirt', 19.99);
echo $product->showDetails();