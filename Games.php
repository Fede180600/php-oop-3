<?php 
require_once __DIR__ . "/Product.php";
class Games extends Product {
    public $materials;
    public $pet_size_recommendation;

    function __construct($_name, $_price, $_brand, $_category, $_materials, $_pet_size_recommendation)
    {
        parent::__construct($_name, $_price, $_brand, $_category);
        $this->materials = $_materials;
        $this->pet_size_recommendation = $_pet_size_recommendation;
    }

    public function gameInfo() {
        return "$this->materials $this->pet_size_recommendation";
    }
}
?>