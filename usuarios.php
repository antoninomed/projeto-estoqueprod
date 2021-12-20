<?php

class Usuario{
    private $idUsuario,$nomeUsuario, $emailUsuario, $senhaUsuario;

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }
    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }
    public function setNomeUsuario($nomeUsuario){
        $this->nomeUsuario = $nomeUsuario;
    }
    public function getEmailUsuario(){
        return $this->emailUsuario;
    }
    public function setEmailUsuario($emailUsuario){
        $this->emailUsuario = $emailUsuario;
    }
    public function getSenhaUsuario(){
        return $this->senhaUsuario;
    }
    public function setSenhaUsuario($senhaUsuario){
        $this->senhaUsuario = $senhaUsuario;
    }
    public function getTipoUsuario(){
        return $this->tipoUsuario;
    }
    public function setTipoUsuario($tipoUsuario){
        $this->tipoUsuario = $tipoUsuario;
    }





}