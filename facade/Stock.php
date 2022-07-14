<?php 

class Stock 
{

    public static function getProductPriceByID($id)
    {
        if ($id == 10){
            return 1000;
        } else {
            return 50;
        }

    }
    
}

