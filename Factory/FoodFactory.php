<?php 

interface FoodFactory
{
    public function createFood($id) : Food;

}