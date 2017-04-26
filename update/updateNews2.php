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
	array('$set'=>array("news2.noticia"=>$noticia, "news2.background"=>$background, "news2.color"=>$noticiaColor, "news2.title.text"=>$title, "news2.title.color"=>$titleColor, "news2.title.titleAling"=>$titleAling)));

  header('location:../gerenciador.php#footer');
  
?>