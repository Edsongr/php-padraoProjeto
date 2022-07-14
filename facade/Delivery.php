<?php 

class Delivery 
{
    public $address;
    public $cep;
    public $shippingCompany;

    public function calculateShipping()
    {
        return 200;
    }
    
}

