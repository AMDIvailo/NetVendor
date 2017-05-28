<link rel="stylesheet" type="text/css" href="login.css" />
<?php
require_once("functions.php");
if(!isIndexPage())
{
	redirect("/");
	exit;
}
require("loginForm.php");
if(isset($_POST['username'], $_POST['password'], $_POST['enter']))
{
	if($_POST['username'] != "" && $_POST['password'] != "")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$manager = new UserMgr();
		$validLogin = $manager->validate($username, $password);
		if($validLogin)
		{
			print "Login succeeded!";
			$User = new User($username);
			$User->createSession();
			redirect("/");
		}
		else
		{
			print "Incorrect username or/and password!";
		}
	}
}
?>
