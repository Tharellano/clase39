<?php

	require_once("model/modelo.php");
	
	$encomienda = new modelo();
	$datos = $encomienda->getEncomienda();
	 
	require_once("view/vista.php");
	
?>
