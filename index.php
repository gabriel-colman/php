
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
            
            $root = new usuario();
            $root->loadById(3);
            echo $root;
            
        ?>
    </body>
</html>
