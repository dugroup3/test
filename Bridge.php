<?php
/**
 * Created by PhpStorm.
 * User: jiangchiying
 * Date: 2019-02-27
 * Time: 11:12
 */

class Bridge
{
    private $Bridgename;
    private $Length;
    private $Year;
    private $location;

    public function __construct($Bridgename,$Length,$Year,$location)
    {
        $this->Bridgename=$Bridgename;
        $this->Length=$Length;
        $this->Year=$Year;
        $this->location=$location;
    }
    public function getbname(){
        return $this->Bridgename;
    }

    public function getlength(){
        return $this->Length;
    }
    public function getyear(){
        return $this->Year;
    }
    public function getlocation(){
        return $this->location;
    }
}