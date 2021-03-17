
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste DAO</title>
    </head>
    <body>
        <?php
            require_once("./config.php");
//            $sql = new Sql();
//            $usuarios =   $sql->select("SELECT * FROM tb_usuarios");
//            echo json_encode($usuarios); 
              // VOU MEXER AGORA COM CLASSE USUARIO
            
            
            //---------Carrega um usuario
//            $root = new usuario();
//            $root->loadById(3);
//            echo $root;
            
            //-------Carrega uma lista de usuario
            //$lista = usuario::getList() 
                    
            //---------Carrega uma lista de usuario buscando pelo login
//            $seach = usuario::search("jo");//procura todos os usuarios que comessa com "jo"
//            echo json_encode($seach);
            
            //---------Carrega uma lista de usuario buscando pelo login e a senha 
            $usuario = new usuario();
            $usuario->login("root", "!@#");
        ?>
    </body>
</html>
