<?php
    
  include("../conexaoRedis.php");
  include("../verificaSessao.php");

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
          array('$set'=>array("jogadores.textColor"=>$color, "jogadores.".$player.".nome"=>$nome, "jogadores.".$player.".numero"=>$camisa, "jogadores.".$player.".posicao"=>$posicao)));
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