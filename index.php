<!DOCTYPE>
<?php 
include("functions/functions.php"); 

?>
<html>
     <head>
	 <title>My Online Shop </title>
	   <link rel="stylesheet" href="styles/style.css" media="all" />
	 </head>
	
	<body>
	
	
	
	 
	 <div class="main_wrapper">
              <div class="header_wrapper">
			  <a href="index.php"><img id ="logo" src="images/logo.gif" /></a>
			  <img id="banner" src="images/ad_banner.gif" />
                
				</div>
				
				
				
				
				<div class="menubar">
				<ul id="menu">
				<li><a href="index.php"> Home </a></li>
				<li><a href="all_products.php"> All Products</a></li>
				<li><a href="customer/my_account.php"> My Account</a></li>
				<li><a href="#"> Sign Up </a></li>
				<li><a href="cart.php"> Shopping Cart </a></li>
				<li><a href="#"> Contact us </a></li>
				
				</ul>
				<div id="form">
				<form method+"get" action="results.php" enctype="multipart/form-data">
				   <input type="text" name="user_query" placeholder="search a product"/ >
				   <input type="submit" nme="search" value="search" />
				</form>
				</div>
				</div> 
			

			
			
			
			
			
			<div class="content_wrapper">
				
				   <div id="sidebar">
			       <div id="sidebar_title">Categories</div>
				   
				   
				   <ul id="cats">
                   <?php getcats(); ?>
				   
				   
				   
				   
                    <ul>
					
					       <div id="sidebar_title">Brands</div>
				   
				   
				   <ul id="cats">
                   	<?php getBrands() ; ?>
					
					<ul>
			
					
			</div>
			       <div id="content_area">
				   <div id="shopping_cart">
                     <span style="float:right; font-size:18px; padding:5px; line-Height:40px;"> 
					 Welcome Guest! <b style="color:red"> Shopping Cart</b> 
					 Total Items: Total Price:
					 <a href ="cart.php" style="color:yellow">GO TO CART</a>
					 </span>				   
				   
				   </div>
				   
				   <div id ="products_box">
				   
				   
                       <?php getPro(); ?>
					   <?php getCatPro(); ?>
				       <?php getBrandPro();?>
				   </div>
				   </div>



				   
			   <div id="footer">
		   	   
			   
			   <h2 style="text-align:center; padding-top:30px;">&copy;2015 by www.cse370_group08.com</h2>
			   
			   
			   
			   
			   
			   
			   </div>
</div>			   
	 </body>
	 </html>