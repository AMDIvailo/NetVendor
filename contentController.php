<?php
require("functions.php");
if(!isIndexPage())
{
	redirect("/");
	exit;
}
//Require menu in all subs if logged in
require("menu.php");
switch(getSubPage())
{
	case "shop":
		require("shop.php");
		break;
	case "home":
		require("home.php");
		break;
	case "logout":
		require("logout.php");
		break;
	case false:
		require("home.php");
		break;
	default:
		require("home.php");
		break;
}
?>
