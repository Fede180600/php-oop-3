<?php 

trait ProductSpecifics {
    public $product_code;
    public $product_origin;
    public $C€;

    public function setSpecifics($_product_code, $_product_origin, $_C€) {
        $this->product_code = $_product_code;
        $this->product_origin = $_product_origin;
        $this->C€ = $_C€;
    }

    public function printSpecifics() {
        $specifics = "<strong>Codice prodotto: " . "</strong>" . $this->product_code . "<br>" . 
        "<strong>Provenienza: " .
        "</strong>" .
        $this->product_origin;
        return $specifics;
    }
}
?>