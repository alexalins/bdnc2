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

  $player = $_POST['action'];
  $nome = $_POST['nomeJogador'];
  $camisa = $_POST['numeroCamisa'];
  $color = $_POST["corNomeJogador"];
  $posicao =$_POST["posicaoJogador"];

  $imagem = $_FILES['imagem']['name'];
  
  //alterar somente nome e numero
  if($imagem == ""){
    
    $collection->update(array("_id"=>$logado),
          array('$set'=>array("jogadores.textColor"=>$color, "jogadores.".$player.".nome"=>$nome, "jogadores.".$player.".numero"=>$camisa, "posicao"=>$posicaoJogador)));
  }
  else{
    $ext = pathinfo($imagem, PATHINFO_EXTENSION);

    $imagem = $player.".".$ext;
    //diretorio relativo para chegar no arquivo
    $caminhoArquivoCSS = "usuarios/".$logado."/".$imagem;

    $destino = '../images/usuarios/'.$_SESSION['email'].'/'.$imagem;
     
    $arquivo_tmp = $_FILES['imagem']['tmp_name'];

    $collection->update(array("_id"=>$logado),
          array('$set'=>array("jogadores.textColor"=>$color, "jogadores.".$player.".nome"=>$nome, "jogadores.".$player.".numero"=>$camisa, "jogadores.".$player.".imagem"=>$caminhoArquivoCSS)));
     
    move_uploaded_file( $arquivo_tmp, $destino  );
  }

  header('location:../gerenciador.php#elenco');
?>