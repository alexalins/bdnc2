<?php
	//Conexão 
	try{
		$redis = new Redis(); 
  		$redis->connect('127.0.0.1', 6379);
	}catch(Exception $e) {
    echo $e->getMessage();
	}  

	//inserindo
	$result = mysqli_query($db, "SELECT * FROM usuarios where email='$email' and senha='$senha'");
	 
	$id = "3";
	$dado = array(
   		"email" => $result['email'],
   		"senha" => $result['senha'],
	);

	try{
		$redis->set($id, $dado);
		echo "DEU CERTO, VIADA";
	}catch(Exception $e) {
	echo "erou";
    echo $e->getMessage();
	} 
?>