<?php 
require_once __DIR__ . "/ProductSpecifics.php";
class User {
    use ProductSpecifics;

    public $name;
    public $email;
    public $registered;
    public $cart = [];

    function __construct($_name, $_email, $_registered)
    {
        $this->name = $_name;
        $this->email = $_email;
        $this->registered = $_registered;
    }

    public function addProductToCart($product) {
        if ($this->C€ == true) {
            $this->cart[] = $product;
        } else {
            throw new Exception("Prodotto privo di Certificato Europeo inserire comunque nel carrello?");
        }
    }

    public function getPrice() {
        $total_price = 0;
        foreach($this->cart as $item) {
            $total_price += $item->price;
        }
        return $total_price;
    }

    public function getPriceDiscounted() {
        $discounted_price = 0;
        if($this->registered === true) {
            $discounted_price = " €" . ($this->getPrice() - ($this->getPrice() * 20) / 100) . "<small> Con sconto del 20% applicato</small>";
        } else {
           $discounted_price = " €" . $this->getPrice() . "<small> Registrati e non perderti il 20% di sconto</small>";
        }
        return $discounted_price;
    }
}
?>