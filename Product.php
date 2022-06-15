<?php 
class Product {
    public $name;
    public $price;
    public $brand;
    public $category;

    function __construct($_name, $_price, $_brand, $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->brand = $_brand;
        $this->category = $_category;
    }

    public function productInfo() {
        return "$this->brand $this->name prezzo: €$this->price";
    }
}
?>