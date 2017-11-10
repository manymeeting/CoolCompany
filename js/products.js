(function(){
	$(document).ready(function() {
	    
	  // $(document).on("click", "#login_submit_btn", function() {
	    
	  // })
	  let productsInfo = $("#productsInfo").html();
	  productsInfo = productsInfo.length > 0 ? eval(productsInfo) : [];
	  loadThumbImage(productsInfo);


	});


	function loadThumbImage(productsInfo)
	{
		if(!productsInfo || productsInfo.length <= 0)
		{
			return;
		}
		// render product images
		for (let i = 0; i < productsInfo.length; i++) {
			let prodID = productsInfo[i].id;
			let thumbImg = productsInfo[i].thumbImg;

			$prodWrapper = $('div[prodid="' + prodID + '"]');
			if($prodWrapper.length > 0)
			{
				$prodWrapper.css("background-image", 'url(' + thumbImg + ')');
			}
		}	
	}
})();
