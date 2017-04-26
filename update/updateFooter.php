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
  $copyright =$_POST['copyright'];
  $color = $_POST['color'];

  $collection->update(array("_id"=>$logado),
	array('$set'=>array("footer.direitos"=>$copyright, "footer.facebook"=>$facebook, "footer.twitter"=>$twitter, "footer.linkedin"=>$linkedin, "footer.instagram"=>$instagram)));
  header('location:../gerenciador.php#footer');
  
?>