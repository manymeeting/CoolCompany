<!-- 
Required:
	$preViewd: an array contains products id e.g. ["4","2","5","12","9"]
	$products: an array contains products infornation e.g. [
		{
			"name" : "SpaceshipI",
			"id" : "1",
		    "thumbImg": "./images/products/spaceship01_thumb.jpg"
		 }
	]
-->
<div class="coolcp_section">
  <p class="coolcp_content_title">Previously Viewed</p>
  <p>
  	<?php
  		for ($i=0; $i < count($preViewed); $i++)
  		{ 
  			$id = $preViewed[$i];
  			$prodName = "";
  			$linkTo = 'productDetail.php?id=' . $id;
  			for ($j=0; $j < count($products); $j++)
  			{ 
  				if($products[$j]->id == $id)
  				{
					$prodName = $products[$j]->name;
  				}
  			}
  			echo '<a href="' . $linkTo .'" class="btn small solid round coolcp_tag_links">' . $prodName . '</a>';
  		}
  	?>
  </p>
</div>