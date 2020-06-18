<?php

class Servico 
{
    
    private $idServico;
    private $nmServico;
    private $sgServico;
    private $vlServico;
   
   public function getIdProduto($novoIdServico)
   {
        this->$idServico = $novoIdServico;
   }
   public function setIdServico()
   {
       return $this->idServico;
   }
    
   public function getNmServico($novoNmServico)
   {
        this->$nmServico = $novoNmServico;
   }
   public function setNmServico()
   {
       return $this->nmServico;
   }

   public function getVlProduto($novoVlServico)
   {
        this->$vlServico = $novoVlServico;
   }
   public function setVlServico()
   {
       return $this->vlServico;
   }

   public function getSgServico($novoSgServico)
   {
        this->$sgServico = $novoSgServico;
   }
   public function setSgServico()
   {
       return $this->sgProduto;
   }
}