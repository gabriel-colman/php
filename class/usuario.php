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
     
     $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuarios = :ID",array(
            ":ID"=>$id
        ));
        if (isset($results[0]) > 0) {//isset — Informa se a variável foi iniciada

            $row = $results[0];
            $this->setidCadastro(new DateTime($row["idcadastro"]));// data e horario que foi cadastrado
            $this->setLogin($row["deslogin"]);
            $this->setSenhaSenha($row["desenha"]);
            $this->setUsuario($row["idUsuario"]);
            
        }
    }
    public static function getList() {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY");//aqui vai trazer uma lista de usuario
    }
    
    public static function search($login) {//para buscar o usuario
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin",array(
            ':SEARCH'=>"%".$login."%"
        ));
        
    }


    public function login($login, $passowrd) { //pesquisar pela login e senha
        $sql = new Sql();
     
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND desenha = :PASSWORD",array(
            ":LOGIN"=>$login , ":PASSWARD"=>$passowrd
        ));
        if (isset($results[0]) > 0) {//isset — Informa se a variável foi iniciada

            $row = $results[0];
            $this->setidCadastro(new DateTime($row["idcadastro"]));// data e horario que foi cadastrado
            $this->setLogin($row["deslogin"]);
            $this->setSenhaSenha($row["desenha"]);
            $this->setUsuario($row["idUsuario"]);
            
        } else {
            throw new Exception("Login e/ou senha invalidos");
        }
        
        
    }
    public function __toString() {//Retorna a string contendo a representação JSON de um value.
        return json_encode(array(
            "idUsuario"=> $this->getUsuario(),
            "desenha"=> $this->getSenha(),
            "idcadastro"=> $this->getidCadastro()->format("d/m/Y H:i:s "),
            "deslogin"=> $this->getidLogin()
        ));
    }
    
}
