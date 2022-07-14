<?php 

require "./Stock.php";
require "./Delivery.php";
require "./Payment.php";

class Purchase 
{

    public static function buy($idProduct, $address, $cep, $shippingCompany, $methodPayment)
    {
        $valueProduct = Stock::getProductPriceByID($idProduct);
        $delivery     = new Delivery();
    
        $delivery->address          = $address;
        $delivery->cep              = $cep;
        $delivery->shippingCompany  = $shippingCompany;

        $deliveryValue              = $delivery->calculateShipping();
      
        $total                      = $valueProduct + $deliveryValue;
     
        if ($methodPayment === 1){
            Payment::cardPayment($total);
        } else {
            Payment::billetPayment($total);
        }

    }


}

