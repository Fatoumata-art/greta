<?php

require '../app/Autoloader.php';
require  '../app/Database.php';


Autoloader::register();



$url=($_GET['url'])??null;

$url=explode("/",filter_var($url,FILTER_SANITIZE_URL));


$ctrl_url=$url[0]??null;
$action_url=($url[1])??'index';
$param1_url=($url[2])??null;





if($ctrl_url=="apropos"){

	$controller= new AproposController();
	$controller->index();

}
elseif($ctrl_url=="formation"){

	$controller= new FormationController();

	if(ctype_digit($action_url)){
		$controller->detailsMessage((int)$action_url);
		

	}else{
		$controller->index();

	}

}
elseif($ctrl_url=="contact"){

	$controller= new ContactController();
	$controller->index();

}
else{
	$controller= new Accueilcontroller();
	$controller->index();
}




?>