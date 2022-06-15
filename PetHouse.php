<?php 
require_once __DIR__ . "/PetHouse.php";
require_once __DIR__ . "/ProductSpecifics.php";

class PetHouse extends Product {
    use ProductSpecifics;

    public $dimensions;
    public $outdoor_or_indoor;

    function __construct($_name, $_price, $_brand, $_category, $_dimensions, $_outdoor_or_indoor)
    {
        parent::__construct($_name, $_price, $_brand, $_category);
        $this->dimensions = $_dimensions;
        $this->outdoor_or_indoor = $_outdoor_or_indoor;
    }

}
?>