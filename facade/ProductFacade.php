<?php

namespace app\facade;

class ProductFacade
{
    private array $products = [];
    private string $file;
    public function __construct(string $file)
    {
        $this->file = $file;
        $this->compile();
    }

    private function compile(){
        $lines = getProductFileLines($this->file);
        foreach ($lines as $line){
            $id = getIDFromLine($line);
            $name = getNameFromLine($line);
            $this->products[$id] = getProductObjectFormId($id, $name);
        }
    }

    public function getProducts(){
        return $this->products;
    }
    public function getProduct(string $id){
        if(isset($this->products[$id])){
            return $this->products[$id];
        }
        return null;
    }
}