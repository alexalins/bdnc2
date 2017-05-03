<?php
    
  include("../conexaoRedis.php");
  include("../verificaSessao.php");

  include("../conexaoMongo.php");

  $background = $_FILES['imagem']['name'];
  $ext = pathinfo($background, PATHINFO_EXTENSION);


  $background = "background.".$ext;
  //diretorio relativo para chegar no arquivo
  $caminhoArquivoCSS = "usuarios/".$logado."/".$background;

	$destino = '../images/usuarios/'.$_SESSION['email'].'/'.$background;
	 
	$arquivo_tmp = $_FILES['imagem']['tmp_name'];
	 
	move_uploaded_file( $arquivo_tmp, $destino  );


  //atualizar no mongo as informações do formulario

    $collection->update(array("_id"=>$logado),
    	array('$set'=>array("background"=>$caminhoArquivoCSS)));

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