<?php
	require_once('appvars.php');
	
	session_start();
    $index = array_search($_GET['prod_id'], $_SESSION['booking']);
    if($index !== false){
        unset($_SESSION['booking'][$index]);
    }
	header('Location: http://localhost:8100/RUSH00/basket.php');
?>