<?php 
require_once __DIR__ . "/Product.php";
class Food extends Product {
    public $flavour;
    public $cat_or_dog;
    public $pet_age;
    public $quantity;

    function __construct($_name, $_price, $_brand, $_category, $_flavour, $_cat_or_dog, $_pet_age, $_quantity)
    {
        parent::__construct($_name, $_price, $_brand, $_category);
        $this->flavour = $_flavour;
        $this->cat_or_dog = $_cat_or_dog;
        $this->pet_age = $_pet_age;
        $this->quantity = $_quantity;
    }

    public function foodInfo() {
        return "$this->flavour $this->cat_or_dog";
    }
}
?>