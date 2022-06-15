<?php 
class CreditCard {
    public $number;
    public $valid_truh;
    public $cvv;
    public $active;

    function __construct($_number, $_valid_truh, $_cvv, $_active)
    {
        $this->number = $_number;
        $this->valid_truh = $_valid_truh;
        $this->cvv = $_cvv;
        $this->active = $_active;
    }

    public function isValid() {
        $card = "";
        if ($this->active == false) {
            $card = "Carta scaduta, inserire un'altro metodo di pagamento";
        } else {
            $card = "Metodo di pagamento accettato, procedere al Pagamento?";
        }
        return $card;
    }
}
?>