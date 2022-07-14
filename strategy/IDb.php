<?php 

interface IDb 
{
    public function connect(); 
    public function select();
    public function save();
}