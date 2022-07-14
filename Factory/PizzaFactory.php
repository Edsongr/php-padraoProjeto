<?php 

require_once "./FoodFactory.php";
require_once "./Pizza.php";

class PizzaFactory implements FoodFactory 
{
    public function createFood($id) : Food
    {
        $p = new Pizza();

        switch ($id) {
            case 1:
                # Pizza Frango
                $p->name                = "Pizza de Frango";
                $p->flavor1             = "Frango";
                $p->flavor2             = "Queijo";
                $p->withPalmetto        = false;
                $p->edgeWithStuffing    = false;
                break;
            case 2:
            case "2":
                # Pizza Calabreza
                $p->name                = "Pizza de Calabreza";
                $p->flavor1             = "Calabreza";
                $p->flavor2             = "Cebola";
                $p->withPalmetto        = false;
                $p->edgeWithStuffing    = true;
                break;
            case 3:
                # Pizza Palmito
                $p->name                = "Pizza de Palmito";
                $p->flavor1             = "Palmito";
                $p->flavor2             = "";
                $p->withPalmetto        = true;
                $p->edgeWithStuffing    = true;
                break;
            default:
                $p->name                = "Pizza de SEM NOME";
                $p->flavor1             = " - ";
                $p->flavor2             = "";
                $p->withPalmetto        = false;
                $p->edgeWithStuffing    = false;
                break;
        }

        return $p;
    }

}