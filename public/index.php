<?php

require '../app/Autoloader.php';
require  '../app/Database.php';

Autoloader::register();

$url=($_GET['url'])??null;

$url=explode("-",filter_var($url,FILTER_SANITIZE_URL));

$ctrl_url=$url[0]??null;
$action_url = $url[1] ?? "index";
$param1_url=($url[2])??null;

switch($ctrl_url){
	
	case "apropos":
		{
			$controller= new AproposController();
			$controller->index();
		}
		break;

	case "formation":
		{
			$controller= new FormationController();
			$controller->handle($action_url, $param1_url);
		}
		break;
		
	case "contact":
		{
			$controller= new ContactController();
			$controller->index();
		}
		break;


	case "admin":
		{
			$controller= new AdminController();
			$controller->index();
		}
		
		break;
		default:
		{
			$controller= new Accueilcontroller();
			$controller->index();
		}
		break;

	}
		
	?>