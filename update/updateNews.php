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
  $action = $_POST['action'];
  $title = $_POST['title'];
  $titleColor =$_POST['titleColor'];
  $titleAling = $_POST['titleAling'];
  $noticia = $_POST['noticia'];
  $noticiaColor = $_POST['corNoticia'];
  $background = $_POST['background'];

  echo $action;


  $collection->update(array("_id"=>$logado),
	   array('$set'=>array("news.".$action.".noticia"=>$noticia, "news.titleColor"=>$titleColor, "news.background"=>$background, "news.color"=>$noticiaColor, "news.".$action.".title.texto"=>$title, "news.".$action.".title.text-aling"=>$titleAling)));
  
  header('location:../gerenciador.php#'.$action);
  
?>