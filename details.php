<!DOCTYPE>
<div id="product_box">
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
			  <img id ="logo" src="images/logo.gif" />
			  <img id="banner" src="images/ad_banner.gif" />
                
				</div>
				
				
				
				
				<div class="menubar">
				<ul id="menu">
				<li><a href="#"> Home </a></li>
				<li><a href="#"> All Products</a></li>
				<li><a href="#"> My Account</a></li>
				<li><a href="#"> Sign Up </a></li>
				<li><a href="#"> Shopping Cart </a></li>
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
				   
				 
<?php		
if(isset($_GET['pro_id'])){
		$product_id = $_GET['pro_id'];
		$get_pro = "select * from products where product_id='$product_id'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['product_id'];
	    $pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		$pro_desc = $row_pro['product_desc'];
		echo"
		<div id='single_product'>
		
		<h3>$pro_title</h3>
		<img src='admin_area/product_images/$pro_image' width='400'  height='300' />
       <p><b> $pro_price	</b></p>
	   <p>$pro_desc </p>

<a href='index.php' style='float:left';>Go Back</a>

<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add To Cart </button></a>
	   
		</div>
		
		
		";
		
}
}
?>
				</div>   
                       				   </div>
				   </div>



				   
			   <div id="footer">
		   	   
			   
			   <h2 style="text-align:center; padding-top:30px;">&copy;2015 by www.cse370_group08.com</h2>
			   
			   
			   
			   
			   
			   
			   </div>
</div>			   
	 </body>
	 </html>