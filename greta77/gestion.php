<?php

	if(isset($_GET['header'])) 		{ 	include("php/header.php");}
elseif(isset($_GET['apropos'])) 		{ 	include("php/apropos.php");		}
elseif(isset($_GET['contact'])) 		{ 	include("php/contact.php");	}
elseif(isset($_GET['formation'])) 		{ 	include("php/formation.php");	}
elseif(isset($_GET['details'])) 		{ 	include("php/details.php");	}
elseif(isset($_GET['formulaire'])) 		{ 	include("php/formulaire.php");	}
else 									{ 	include("php/home.php");		}