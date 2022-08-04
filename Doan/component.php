<?php 
	
	function component($productname,$productprice,$productimg,$productid){
		$element ="
	<div class=\"col-md-12 col-5 slick-slide\">
		<div class=\"item_product_main\">
		    <form action=\"index.php\" method=\"post\">
				
				<div class=\"card pos-relative border-0\">
				
					<div  class=\"item_product_img embed-res\">
						<img src=\"$productimg\" alt=\"\" class=\"img-fluid card-img-top\">								    
					</div>
					<div class=\"label_product-sale\">
						<div class=\"label_wrapper-sale\"> -14% </div>
					</div>
					<div class=\"product-action\">
					
						<div class=\"group-action\">
							
							<button type=\"submit\" style=\"z-index:99;\" class=\"btn btn-warning\" name=\"add\"><i class=\"fas fa-shopping-cart\"></i></button>
							<a href=\"viewitem.php?id=$productid\" style=\"  position: absolute;   width: 100%;    height: 100%;\"></a>
							<a href=\"viewitem.php?id=$productid\" style=\"z-index:99;\" class=\"btn btn-warning view-btn\">
								<i class=\"primary far fa-eye\"></i>						
							</a>								
							<input type='hidden' name='product_id' value='$productid'>
							
												</div>
											</div>                                     
										</div>
											
				<div class=\"product_info\">
				<div class=\"card-body p-2\">
					<h6 class=\"card-title\">$productname</h6>
					<h6>
					<span class=\"price red-color\">$$productprice</span>
					<small><s>$17</s></small>                                           
					</h6>
					</div>
				</div>
			
			
		    </form>
		</div>
	</div>
		";
		echo $element;
	}
	function component1($productname,$productprice,$productimg,$productid){
		$element ="
	<div class=\"col-15 col-md-15\">
		<div class=\"item_product_main\">
		    <form action=\"index.php\" method=\"post\">
			<div class=\"card border-0\">
			    <div class=\"item_product_img\">
				<img src=\"$productimg\" alt=\"\" class=\"img-fluid card-img-top\">			    
			    </div>
			    <div class=\"label_product-sale\">
				    <div class=\"label_wrapper-sale\"> -14% </div>
			    </div>
			    <div class=\"product-action\">
				    <div class=\"group-action\">				
					<button type=\"submit\" style=\"z-index:99;\" class=\"btn btn-warning\" name=\"add\"><i class=\"fas fa-shopping-cart\"></i></button>
					<a href=\"viewitem.php?id=$productid\" style=\"  position: absolute;   width: 100%;    height: 100%;\"></a>
					<a href=\"viewitem.php?id=$productid\" style=\"z-index:99;\" class=\"btn btn-warning view-btn\">
						<i class=\"primary far fa-eye\"></i>						
					</a>					
						<input type='hidden' name='product_id' value='$productid'>
					</div>
			    </div>                                     
			</div>
			<div class=\"product_info\">
			<div class=\"card-body p-2\">
				<h6 class=\"card-title\">$productname</h6>
				<h6>
				<span class=\"price red-color\">$$productprice</span>
				<small><s>$19</s></small>                                          
				</h6>
			    </div>
			</div>
		    </form>
		</div>
	</div>
		";
		echo $element;
	}
	function component3($productname,$productprice,$productimg,$productid){
		$element ="
	<div class=\"col-md-12 col-5 slick-slide\">
		<div class=\"item_product_main\">
		    <form action=\"product.php\" method=\"post\">
			
			<div class=\"card border-0\">
			    <div class=\"item_product_img\">
					<img src=\"$productimg\" alt=\"\" class=\"img-fluid card-img-top\">	
							    
			    </div>
			    <div class=\"label_product-sale\">
				    <div class=\"label_wrapper-sale\"> -14% </div>
			    </div>
			    <div class=\"product-action\">
				    <div class=\"group-action\">
						<button type=\"sumbit\" class=\"btn btn-warning\" name=\"add\"><i class=\"fas fa-shopping-cart\"></i></button>	
									
						<input type='hidden' name='product_id' value='$productid'>
						
											</div>
										</div>                                     
									</div>
									
			<div class=\"product_info\">
			<div class=\"card-body p-2\">
				<h6 class=\"card-title\">$productname</h6>
				<h6>
				<span class=\"price red-color\">$$productprice</span>
				<small><s>$19</s></small>                                          
				</h6>
			    </div>
			</div>
			
		    </form>
		</div>
	</div>
		";
		echo $element;
	}
	
	
	function cartElement($productimg, $productname, $productprice,$productid){
		$element="
		<form action=\"cart.php?action=remove&id=$productid\" method=\"POST\" class=\"cart-items\">
		<div class=\"border-right rounded\">
			<div class=\"row bg-white\">
				<div class=\"col-md-3 pl-0\">
					<img src=$productimg alt=\"img1\" class=\"img-fluid\">
				</div>
				<div class=\"col-md-6\">
					<h5 class=\"pt-2\">$productname</h5>
					<small class=\"text-secondary\">Seller: TheNextLevel</small>
					<h5 class=\pt-2\"><span>$</span>$productprice</h5>
					<div class=\"pb-2\">
						<button type=\"button\" class=\"btn btn-warning\">Save of Later</button>
						<button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">REMOVE</button>
					</div>											
				</div>
				<div class=\"col-md-3 d-flex align-items-center\">
					<div class=\"d-flex align-items-center\">
						<span>Quantity</span>	
						<input type=\"number\" name=\"quantity\" value=\"1\" min=\"1\" max=\"10\" id=\"number\"  class=\"form-control w-100 d-inline ml-2\">
																	
					</div>
				</div>
			</div>
		</div>
	</form>
		
		";
		echo $element;
	}
?>