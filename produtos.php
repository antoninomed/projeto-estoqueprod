<?php

class Produto{
    private $idProduto,$nomeProduto, $valorProduto, $validadeProduto, $infoProduto, $fornecedorProduto, $kcalProduto;

    public function getIdProduto(){
        return $this->idProduto;
    }
    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
    }
    public function getNomeProduto(){
        return $this->nomeProduto;
    }
    public function setNomeProduto($nomeProduto){
        $this->nomeProduto = $nomeProduto;
    }
    public function getValorProduto(){
        return $this->valorProduto;
    }
    public function setValorProduto($valorProduto){
        $this->valorProduto = $valorProduto;
    }
    public function getValidadeProduto(){
        return $this->validadeProduto;
    }
    public function setValidadeProduto($validadeProduto){
        $this->validadeProduto = $validadeProduto;
    }
    public function getInfoProduto(){
        return $this->infoProduto;
    }
    public function setInfoProduto($infoProduto){
        $this->infoProduto = $infoProduto;
    }
    public function getFornecedorProduto(){
        return $this->fornecedorProduto;
    }
    public function setFornecedorProduto($fornecedorProduto){
        $this->fornecedorProduto = $fornecedorProduto;
    }
    public function getKcalProduto(){
        return $this->kcalProduto;
    }
    public function setKcalProduto($kcalProduto){
        $this->kcalProduto = $kcalProduto;
    }



}