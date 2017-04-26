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
  $title = $_POST['title'];
  $titleColor = $_POST['titleColor'];
  $titleAling = $_POST['titleAling'];
  $noticia = $_POST['noticia'];
  $noticiaColor = $_POST['noticiaColor'];
  $background = $_POST['background'];

  $collection->update(array("_id"=>$logado),
	array('$set'=>array("news1.noticia"=>$noticia, "news1.background"=>$background, "news.color"=>$noticiaColor, "news1.title.text"=>$title, "news1.title.color"=>$titleColor, "news1.title.titleAling"=>$titleAling)));

  header('location:../gerenciador.php#footer');
  
?>