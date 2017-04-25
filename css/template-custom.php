<?php
// Define que o arquivo terá a codificação de saída no formato CSS
	header("Content-type: text/css");

	session_start();
	if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
	{
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		header('location:../index.html');
	}
	$logado = $_SESSION['email'];

	include("../conexaoMongo.php");

	$cursor = $collection->find(array("_id"=>$logado));
    foreach ($cursor as $document) {
      $escudo =  $document["escudo"];
      $nomeClube = $document["clube"]["nome"];
      $nomeClubeColor = $document["clube"]["color"];
      $background = $document["background"];
    }

?>



#bg-image{
	background: url("../images/<?php echo $background;?>") no-repeat;
}
#nomeClube::before{
	content: "<?php echo $nomeClube;?>";
}
#nomeClube{
	color: <?php echo $nomeClubeColor; ?>;
}
#logo{
	content:url("../images/<?php echo $escudo;?>");
}
#headerUltimoJogo{
	background-color: green;
	text-align: center;
}
#bodyUltimoJogo{
	background-color: rgba(0, 0, 0, 0.7);
}
#headerProximoJogo{
	background-color: green;
	text-align: center;
}
#bodyProximoJogo{
	background-color: rgba(0, 0, 0, 0.7);
}
.placar{
	color: white
}
.dataJogo{
	color: white;
}
.grid1{
	background-color: rgba(0, 0, 0, 0.7);
}
.icone-news{
	text-align: left;
}
.grid1 h3{
	color: red;
	text-align: center;
}
.grid1 p{
	text-align: left;
	color: white;
}
.polaroid p{
	color: white;
}
