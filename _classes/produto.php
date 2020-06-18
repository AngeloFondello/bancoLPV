<?php

class Produto 
{
    
    private $idProduto;
    private $nmProduto;
    private $vlProduto;
   
   public function getIdProduto($novoIdProduto)
   {
        this->$idProduto = $novoIdProduto;
   }
   public function setIdProduto()
   {
       return $this->idProduto;
   }
    
   public function getNmProduto($novoNmProduto)
   {
        this->$nmProduto = $novoNmProduto;
   }
   public function setNmProduto()
   {
       return $this->nmProduto;
   }

   public function getVlProduto($novoVlProduto)
   {
        this->$vlProduto = $novoVlProduto;
   }
   public function setVlProduto()
   {
       return $this->vlProduto;
   }
}