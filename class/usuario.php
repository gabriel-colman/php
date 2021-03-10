<?php

class usuario {

    private $idusuario;
    private $deslogin;
    private $desSenha;
    private $idCadastro;

    public function getidCadastro() {
        return $this->idCadastro;
    }
    public function setidCadastro($value) {
        $this->idCadastro = $value;
    }
    
    public function getidLogin() {
        return $this->deslogin;
    }
    public function setLogin($value) {
        $this->deslogin = $value;
    }
    
    public function getSenha() {
        return $this->desSenha;
    }
    public function setSenha($value) {
        $this->desSenha = $value;
    }
      
    public function getUsuario() {
        return $this->idusuario;
    }
    public function setUsuario($value) {
        $this->idusuario = $value;
    }
    
    
    public function loadById($id) {
     $sql = new Sql();
     
     $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuarios = :id" );
    }
    
}
