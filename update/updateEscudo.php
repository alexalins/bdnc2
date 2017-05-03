<?php
    
  include("../conexaoRedis.php");
  include("../verificaSessao.php");
  $logado = $redis->get("email");

  include("../conexaoMongo.php");
  $nomeClube = $_POST['nomeClube'];
  $nomeClubeColor =$_POST["nomeClubeColor"];

  $escudo = $_FILES['escudo']['name'];

  //imagem não alterada
  if($escudo == ""){
    $collection->update(array("_id"=>$logado),
      array('$set'=>array("clube.nome"=>$nomeClube, "clube.color"=>$nomeClubeColor)));
      header('location:../gerenciador.php');
  }

  //usuario decidiu mudar a imagem
  else{
      $ext = pathinfo($escudo, PATHINFO_EXTENSION);

      $escudo = "escudo.".$ext;
      //diretorio relativo para chegar no arquivo
      $caminhoArquivoCSS = "usuarios/".$logado."/".$escudo;

      //destino de copia
    	$destino = '../images/usuarios/'.$logado.'/'.$escudo;
    	 
    	$arquivo_tmp = $_FILES['escudo']['tmp_name'];
    	 
    	move_uploaded_file( $arquivo_tmp, $destino  );


      //atualizar no mongo as informações do formulario

        // insert 

        $collection->update(array("_id"=>$logado),
        	array('$set'=>array("escudo"=>$caminhoArquivoCSS, "clube.nome"=>$nomeClube, "clube.color"=>$nomeClubeColor)));

        echo "Documento atualizadocom sucesso";

        $cursor = $collection->find(array("_id"=>$logado));
        foreach ($cursor as $document) {
          echo $document["_id"];
          echo $document["escudo"];
          echo $document["clube"]["nome"];
          echo $document["clube"]["color"];
        }
        header('location:../gerenciador.php#escudo');
  }

  
?>