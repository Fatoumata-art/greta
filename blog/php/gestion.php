<?php

	if(isset($_GET['apropos'])) 			{ 		include("php/apropos.php");				}
elseif(isset($_GET['blog'])) 				{ 		include("php/blog.php");				}
elseif(isset($_GET['msg'])) 				{ 		include("php/blog_details.php");		}
elseif(isset($_GET['contact'])) 			{ 		include("php/contact.php");				}
else 										{ 		include("php/accueil.php");				}