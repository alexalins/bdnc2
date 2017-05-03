<?php
    
 
  include("../conexaoRedis.php");
  include("../verificaSessao.php");
  $logado = $redis->get("email");
  

  include("../conexaoMongo.php");
  $cor = $_POST["cor"];
  $align = $_POST["titleAlign"];
  echo $align; 
  $collection->update(array("_id"=>$logado),
  	array('$set'=>array("separadores.color"=>$cor, "separadores.align"=>$align)));

  header('location:../gerenciador.php');
  
?>