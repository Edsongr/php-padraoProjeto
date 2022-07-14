<?php 

require_once "./IIceCream.php";

class Granulated implements IIceCream
{

    private $objDecorator;

    public function __construct(IIceCream $objDecorator)
    {
        $this->objDecorator = $objDecorator;
    }

    public function price()
    {
        return $this->objDecorator->price() + 2.5;
    }


}