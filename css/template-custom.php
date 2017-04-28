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
?>



#bg-image{
	background: url("../images/<?php echo $document["background"];?>") no-repeat;
}
#nomeClube::before{
	content: "<?php echo $document["clube"]["nome"];?>";
}
#nomeClube{
	color: <?php echo $document["clube"]["color"]; ?>;
}
#logo{
	content:url("../images/<?php echo $document["escudo"];?>");
}
.headerJogos{
	background-color: <?php echo $document["jogos"]["header"]["background"];?>;
	color: <?php echo $document["jogos"]["header"]["color"];?>;
}
#jogos .body{
	background-color: <?php echo $document["jogos"]["body"]["background"];?>;
}


#clubeMan1::after{
	content: "<?php echo $document["jogos"]["ultimoJogo"]["man"];?>";
}
#placarClubeMan1::after{
	content: "<?php echo $document["jogos"]["ultimoJogo"]["placarMan"];?>";
}
#clubeVis1::after{
	content: "<?php echo $document["jogos"]["ultimoJogo"]["vis"];?>";
}
#placarClubeVis1::after{
	content: "<?php echo $document["jogos"]["ultimoJogo"]["placarVis"];?>";
}
#data1::after{
	content: "<?php echo $document["jogos"]["ultimoJogo"]["data"];?>";
}


#clubeMan2::after{
	content: "<?php echo $document["jogos"]["proximoJogo"]["man"];?>";
}
#placarClubeMan2::after{
	content: "<?php echo $document["jogos"]["proximoJogo"]["placarMan"];?>";
}
#clubeVis2::after{
	content: "<?php echo $document["jogos"]["proximoJogo"]["vis"];?>";
}
#placarClubeVis2::after{
	content: "<?php echo $document["jogos"]["proximoJogo"]["placarVis"];?>";
}
#data2::after{
	content: "<?php echo $document["jogos"]["proximoJogo"]["data"];?>";
}


.confrontos .member-infos h4{
	color: <?php echo $document["jogos"]["body"]["color"];?>;
}

.icone-news{
	text-align: left;
}
.grid1 h3{
	color: red;
	text-align: center;
}

.polaroid p{
	color: <?php echo $document["jogadores"]["textColor"];?>
}
.polaroid span{
	color: <?php echo $document["jogadores"]["textColor"];?>
}




.noticia{
	background-color: <?php echo $document["news"]["background"];?>
}
.noticias h3{
	color: <?php echo $document["news"]["titleColor"];?>;
}
.noticias p::after{
	color: <?php echo $document["news"]["color"];?>;
}
#news1 h3::after{
	content: "<?php echo $document["news"]["news1"]["title"]["texto"];?>";	
}
#news1 p::after{
	content: "<?php echo $document["news"]["news1"]["noticia"];?>";	
}
#news2 h3::after{
	content: "<?php echo $document["news"]["news2"]["title"]["texto"];?>";
	color: <?php echo $document["news"]["news2"]["title"]["color"];?>;
}
#news2 p::after{
	content: "<?php echo $document["news"]["news2"]["noticia"];?>";
}
#news3 h3::after{
	content: "<?php echo $document["news"]["news3"]["title"]["texto"];?>";
}
#news3 p::after{
	content: "<?php echo $document["news"]["news3"]["noticia"];?>";
}







#player1{
	content:url("../images/<?php echo $document["jogadores"]["player1"]["imagem"];?>");
}
#p1Nome::before{
	content: "<?php echo $document["jogadores"]["player1"]["nome"];?>";
}
#p1Numero::before{
	content: "<?php echo $document["jogadores"]["player1"]["numero"];?>";
}
#posicaoP1::before{
	content: "<?php echo $document["jogadores"]["player1"]["posicao"];?>";
}


#player2{
	content:url("../images/<?php echo $document["jogadores"]["player2"]["imagem"];?>");
}
#p2Nome::before{
	content: "<?php echo $document["jogadores"]["player2"]["nome"];?>";
}
#p2Numero::before{
	content: "<?php echo $document["jogadores"]["player2"]["numero"];?>";
}
#posicaoP2::before{
	content: "<?php echo $document["jogadores"]["player2"]["posicao"];?>";
}


#player3{
	content:url("../images/<?php echo $document["jogadores"]["player3"]["imagem"];?>");
}
#p3Nome::before{
	content: "<?php echo $document["jogadores"]["player3"]["nome"];?>";
}
#p3Numero::before{
	content: "<?php echo $document["jogadores"]["player3"]["numero"];?>";
}
#posicaoP3::before{
	content: "<?php echo $document["jogadores"]["player3"]["posicao"];?>";
}


#player4{
	content:url("../images/<?php echo $document["jogadores"]["player4"]["imagem"];?>");
}
#p4Nome::before{
	content: "<?php echo $document["jogadores"]["player4"]["nome"];?>";
}
#p4Numero::before{
	content: "<?php echo $document["jogadores"]["player4"]["numero"];?>";
}
#posicaoP4::before{
	content: "<?php echo $document["jogadores"]["player4"]["posicao"];?>";
}


#player5{
	content:url("../images/<?php echo $document["jogadores"]["player5"]["imagem"];?>");
}
#p5Nome::before{
	content: "<?php echo $document["jogadores"]["player5"]["nome"];?>";
}
#p5Numero::before{
	content: "<?php echo $document["jogadores"]["player5"]["numero"];?>";
}
#posicaoP5::before{
	content: "<?php echo $document["jogadores"]["player5"]["posicao"];?>";
}

#player6{
	content:url("../images/<?php echo $document["jogadores"]["player6"]["imagem"];?>");
}
#p6Nome::before{
	content: "<?php echo $document["jogadores"]["player6"]["nome"];?>";
}
#p6Numero::before{
	content: "<?php echo $document["jogadores"]["player6"]["numero"];?>";
}
#posicaoP6::before{
	content: "<?php echo $document["jogadores"]["player6"]["posicao"];?>";
}


#player7{
	content:url("../images/<?php echo $document["jogadores"]["player7"]["imagem"];?>");
}
#p7Nome::before{
	content: "<?php echo $document["jogadores"]["player7"]["nome"];?>";
}
#p7Numero::before{
	content: "<?php echo $document["jogadores"]["player7"]["numero"];?>";
}
#posicaoP7::before{
	content: "<?php echo $document["jogadores"]["player7"]["posicao"];?>";
}


#player8{
	content:url("../images/<?php echo $document["jogadores"]["player8"]["imagem"];?>");
}
#p8Nome::before{
	content: "<?php echo $document["jogadores"]["player8"]["nome"];?>";
}
#p8Numero::before{
	content: "<?php echo $document["jogadores"]["player8"]["numero"];?>";
}
#posicaoP8::before{
	content: "<?php echo $document["jogadores"]["player8"]["posicao"];?>";
}


#player9{
	content:url("../images/<?php echo $document["jogadores"]["player9"]["imagem"];?>");
}
#p9Nome::before{
	content: "<?php echo $document["jogadores"]["player9"]["nome"];?>";
}
#p9Numero::before{
	content: "<?php echo $document["jogadores"]["player9"]["numero"];?>";
}
#posicaoP9::before{
	content: "<?php echo $document["jogadores"]["player9"]["posicao"];?>";
}


#player10{
	content:url("../images/<?php echo $document["jogadores"]["player10"]["imagem"];?>");
}
#p10Nome::before{
	content: "<?php echo $document["jogadores"]["player10"]["nome"];?>";
}
#p10Numero::before{
	content: "<?php echo $document["jogadores"]["player10"]["numero"];?>";
}
#posicaoP10::before{
	content: "<?php echo $document["jogadores"]["player10"]["posicao"];?>";
}


#player11{
	content:url("../images/<?php echo $document["jogadores"]["player11"]["imagem"];?>");
}
#p11Nome::before{
	content: "<?php echo $document["jogadores"]["player11"]["nome"];?>";
}
#p11Numero::before{
	content: "<?php echo $document["jogadores"]["player11"]["numero"];?>";
}
#posicaoP11::before{
	content: "<?php echo $document["jogadores"]["player11"]["posicao"];?>";
}


#player12{
	content:url("../images/<?php echo $document["jogadores"]["player12"]["imagem"];?>");
}
#p12Nome::before{
	content: "<?php echo $document["jogadores"]["player12"]["nome"];?>";
}
#posicaoP12::before{
	content: "<?php echo $document["jogadores"]["player12"]["posicao"];?>";
}

.page-header{
	border-bottom: 1px solid <?php echo $document["separadores"]["color"];?>; 
	color: <?php echo $document["separadores"]["color"];?>; 
}
.page-title{
	text-align: <?php echo $document["separadores"]["align"];?>; 
}

<?php
	}
?>