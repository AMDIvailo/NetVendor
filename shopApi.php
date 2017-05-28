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
}
?>
