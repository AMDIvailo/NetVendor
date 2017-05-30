<?php
if(isset($_GET['category']))
{
	$categoryId = $_GET['category'];
	$category = new Category($categoryId);
	print($category->getCategoryName());
}
else
{
	redirect("/index.php");
}
?>
