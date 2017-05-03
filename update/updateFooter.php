<?php
    
  include("../conexaoRedis.php");
  include("../verificaSessao.php");
  $logado = $redis->get("email");
  
  include("../conexaoMongo.php");

  $facebook = $_POST['facebook'];
  $twitter = $_POST['twitter'];
  $linkedin = $_POST['linkedin'];
  $instagram = $_POST['instagram'];
  $rss = $_POST['rss'];
  $copyright =$_POST['copyright'];
  $color = $_POST['nomeFooterColor'];

  $collection->update(array("_id"=>$logado),
	array('$set'=>array("footer.direitos"=>$copyright, "footer.color"=>$color, "footer.contatos.facebook"=>$facebook, "footer.contatos.twitter"=>$twitter, "footer.contatos.linkedin"=>$linkedin, "footer.contatos.instagram"=>$instagram, "footer.contatos.rss"=>$rss)));
  header('location:../gerenciador.php#site-footer');
  
?>