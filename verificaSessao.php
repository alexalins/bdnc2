<?php
	try {
	  if(!$redis->exists("email")){
	    header('location:index.php');
	  }	    
	} catch (Exception $e) {
	  echo $e->getMessage();
	} 
?>