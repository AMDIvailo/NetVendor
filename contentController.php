<?php
require("functions.php");
if(!isIndexPage())
{
	redirect("/");
	exit;
}
//Require menu in all subs if logged in
if($manager->sessionExists())
{
	require("includes/nav-bar-logged.php");
}
else
{
	require("includes/nav-bar-guest.php");
}
switch(getSubPage())
{
	case "shop":
		require("shop.php");
		break;
	case "home":
		require("home.php");
		break;
	case "login":
		require("login.php");
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
