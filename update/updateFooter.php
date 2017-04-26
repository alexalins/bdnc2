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

  $facebook = $_POST['facebook'];
  $twitter = $_POST['twitter'];
  $linkedin = $_POST['linkedin'];
  $instagram = $_POST['instagram'];
  $rss = $_POST['rss'];
  $direitos =$_POST['direitos'];
  $color = $_POST['color'];

  $collection->update(array("_id"=>$logado),
	array('$set'=>array("footer.direitos"=>$direitos, "footer.facebook"=>$facebook, "footer.twitter"=>$twitter, "footer.linkedin"=>$linkedin, "footer.instagram"=>$instagram)));

  echo "Documento atualizadocom sucesso";

  $cursor = $collection->find(array("_id"=>$logado));
  foreach ($cursor as $document) {
    echo $document["footer.direitos"];
    echo $document["footer.facebook"];
  }
  //header('location:../gerenciador.php');
  
?>