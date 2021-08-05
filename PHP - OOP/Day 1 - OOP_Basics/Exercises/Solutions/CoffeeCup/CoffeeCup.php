<?php
class CoffeeCup
{
    private $quantity;
    private $brand;
    private $temperature;
    private $volume;

    public function __construct($volume)
    {
        $this->volume = $volume;
    }

    //getter & setter
    public function get_quantity()
    {
        return $this->quantity;
    }
    public function set_quantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function get_brand()
    {
        return $this->brand;
    }
    public function set_brand($brand)
    {
        $this->brand = $brand;
    }

    public function get_temperature()
    {
        return $this->temperature;
    }
    public function set_temperature($temperature)
    {
        $this->temperature = $temperature;
    }

    public function sip($qtyToDrink)
    {
        return 'Remains : ' . $this->quantity - $qtyToDrink . ' cl.';
    }

    public function refill()
    {
        return 'Mug full again';
    }
}
