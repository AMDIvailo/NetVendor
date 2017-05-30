<div class="col-sm-2">
        <div class="list-group">
	    <?php
	    $categories = shopApi::getCategories();
	    foreach($categories as $category)
	    {
		print("<a href='/index.php?sub=shop&category=".$category["id"]."' class='list-group-item active'>".$category["name"]."</a>");
#		print($category["name"]);
	    }
	    ?>
        </div>
</div>
