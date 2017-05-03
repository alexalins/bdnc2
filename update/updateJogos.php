<?php
    
  include("../conexaoRedis.php");
  include("../verificaSessao.php");

  include("../conexaoMongo.php");
  $jogo = $_POST["action"];
  $headerBackground = $_POST['backgroundHeader'];
  $headerColor = $_POST['headerColor'];
  $bodyBackground = $_POST['backgroundColor'];
  $BodyColor = $_POST['textColor'];
  $man = $_POST['man'];
  $placarMan = $_POST['placarMan'];
  $vis = $_POST['vis'];
  $placarVis = $_POST['placarVis'];
  $data = $_POST["data"];
  

  $collection->update(array("_id"=>$logado),
  	array('$set'=>array("jogos.header.background"=>$headerBackground, "jogos.header.color"=>$headerColor, "jogos.body.background"=>$bodyBackground, 
      "jogos.body.color"=>$BodyColor, "jogos.".$jogo.".man"=>$man, "jogos.".$jogo.".vis"=>$vis, "jogos.".$jogo.".placarMan"=>$placarMan, "jogos.".$jogo.".placarVis"=>$placarVis, "jogos.".$jogo.".data"=>$data)));

  header('location:../gerenciador.php#jogos');
  
?>