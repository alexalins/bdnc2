<?php
    
  session_start();
  if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:../index.php');
  }
  $logado = $_SESSION['email'];

  include("../conexaoMongo.php");
  $cor = $_POST["cor"];
  $align = $_POST["titleAlign"];
  echo $align; 
  $collection->update(array("_id"=>$logado),
  	array('$set'=>array("separadores.color"=>$cor, "separadores.align"=>$align)));

  header('location:../gerenciador.php');
  
?>