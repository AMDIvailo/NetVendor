<?php
require("shopConnection.php");
class shopApi
{
	function getCategoriesCount()
	{
		global $shopconnection;
		$qString = "select * from categories";
		$query = mysqli_query($shopconnection, $qString);
		return mysqli_num_rows($query);
	}
	
	function getCategories()
	{
		global $shopconnection;
		$qString = "select * from categories";
		$query = mysqli_query($shopconnection, $qString);
		while($category = mysqli_fetch_assoc($query))
		{
			$categories[] = $category;
		}
	return $categories;
	}
};

class Category
{
private $categoryId;
	function __construct($id)
	{
		$this->categoryId = $id;
	}

	function getProducts()
	{
		
	}
	
	function getProductsCount()
	{

	}
	
	function getCategoryName()
	{
		global $shopconnection;
		$qString = "select name from categories where id=".$this->categoryId;
		$query = mysqli_query($shopconnection, $qString);
		$categoryName = mysqli_fetch_assoc($query);
		return $categoryName['name'];
	}
};
?>
