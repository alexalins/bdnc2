<?php
           
        include("../validar_usuario.php");
        global $email;
         //Conexão 
          try{
            $redis = new Redis(); 
            $redis->connect('127.0.0.1', 6379);
          }catch(Exception $e) {
            echo $e->getMessage();
          }
          
          if($redis->exists($email)){
            echo $email;
            echo "entrou";
          }else{
            echo "nops";
          }
          
    ?>  