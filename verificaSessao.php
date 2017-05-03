<?php
	try {
	  if($redis->exists("email")){
	    if($redis->exists("senha")){
	      $logado = $redis->get("email");
	    }
	  }else
	  header('location:index.php');
	    
	} catch (Exception $e) {
	  echo $e->getMessage();
	} 
?>