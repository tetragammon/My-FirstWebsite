<?php

include_once('config.php');

if(isset($_GET['id'])){
	
	$id = $_GET['id'];

}else{

	$id = 1;
}

include('header.php');

include('page.php');

include('footer.php');

?>