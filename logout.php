<?php
$user = new User($_SESSION["username"]);
$user->deleteSession();
redirect("/");
?>
