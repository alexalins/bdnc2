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
  $headerBackground = $_POST['headerBackground'];
  $headerColor = $_POST['headerColor'];
  $headerTextAling = $_POST['headerTextAling'];
  $bodyBackground = $_POST['bodyBackground'];
  $BodyColor = $_POST['bodyColor'];
  $man = $_POST['man'];
  $placarMan = $_POST['placarMan'];
  $vis = $_POST['vis'];
  $placarVis = $_POST['placarVis'];

  $collection->update(array("_id"=>$logado),
  	array('$set'=>array()));

  echo "Documento atualizadocom sucesso";

  $cursor = $collection->find(array("_id"=>$logado));
  foreach ($cursor as $document) {
    echo $document["_id"];
    echo $document["escudo"];
    echo $document["clube"]["nome"];
    echo $document["clube"]["color"];
  }
  header('location:../gerenciador.php');
  
?>