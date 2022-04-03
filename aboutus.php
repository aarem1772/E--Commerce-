<!DOCTYPE>
<html>
	<head>
		<title>Shopcart</title>
		<link rel="stylesheet" href="styles/style.css" media="all">
		<link rel="stylesheet" href="styles/test.css" media="all">
		<link rel="stylesheet" href="styles/loginstyle.css" media="all">
		<link rel="stylesheet" href="styles/products.css" media="all">
		<?php
			session_start();
			include("functions/functions.php");
		?>
	
	</head>

	<body style="margin: 0px">
	

		<div class="main_wrapper">
			<div style="background-color:#3498DB ; height:70px" >
				
				
				
				<img src="images/logo.png" height="70" width="70" style="float : left">
				<i style="vertical-align:-10px ;"><b>SHOPCART</b></i>
				<br>
				<i style="float:left"><b>Explore+</b></i>

				<div id="form">
					<form method="get" action="results.php" enctype="multipart/form-data">
						<div>
						<center><input type="text" name="user_query" placeholder="Search for products, brands and more" style="vertical-align:30px; height:30px; width:500px; border-radius: 2px; border-width: 0px; padding-left: 5px" />
						<!---<img src="images/searchicon.png" height="20" width="20" style="vertical-align: 25px" onMouseOver="this.style.cursor='pointer'" name="search"/>---->
						<input type="submit" name="search" value="Search" style="vertical-align:30px; height: 30px ;border-radius: 4px; border-width: 0px; color:white; background-color: black" onMouseOver="this.style.cursor='pointer'"/></center>
					</div>
					</form>
				</div>

			</div>
			<hr style="margin:0; height:2px; background-color: black; border:none">
			
				<div class="navbar">
  					<a href="http://localhost/scripts/ecommerce">Home</a>
	  
		  			<div class="dropdown">
		    				<button class="dropbtn">Mobile 
		      				<i class="fa fa-caret-down"></i>
		    				</button>
		   			 		<div class="dropdown-content">
		      					<a href="http://localhost/scripts/ecommerce/details.php?cat_id=1&brand_id=1">Apple</a>
						      	<a href="http://localhost/scripts/ecommerce/details.php?cat_id=1&brand_id=2">Samsung</a>
						      	<a href="http://localhost/scripts/ecommerce/details.php?cat_id=1&brand_id=3" >One Plus</a>
						      	<a href="http://localhost/scripts/ecommerce/details.php?cat_id=1&brand_id=4">Xiaomi</a>
						      	<a href="http://localhost/scripts/ecommerce/details.php?cat_id=1&brand_id=5">Nokia</a>
						  	</div>
					</div>
					 <div class="dropdown">
						<button class="dropbtn">Laptops 
		      			<i class="fa fa-caret-down"></i>
		    			</button>
		   			 	<div class="dropdown-content">
		      				 <a href="http://localhost/scripts/ecommerce/details.php?cat_id=2&brand_id=6">DELL</a>
						     <a href="http://localhost/scripts/ecommerce/details.php?cat_id=2&brand_id=7">Lenovo</a>
						     <a href="http://localhost/scripts/ecommerce/details.php?cat_id=2&brand_id=8">HP</a>
						     <a href="http://localhost/scripts/ecommerce/details.php?cat_id=2&brand_id=1">Apple</a>
						     <a href="http://localhost/scripts/ecommerce/details.php?cat_id=2&brand_id=9">Acer</a>
						</div>
					</div>
					 <div class="dropdown">
							<button class="dropbtn">Footwear 
			      			<i class="fa fa-caret-down"></i>
			    			</button>
			   				<div class="dropdown-content">
			      				<a href="http://localhost/scripts/ecommerce/details.php?cat_id=3&brand_id=10">Nike</a>
							     <a href="http://localhost/scripts/ecommerce/details.php?cat_id=3&brand_id=11">Adidas</a>
							     <a href="http://localhost/scripts/ecommerce/details.php?cat_id=3&brand_id=12">Puma</a>
							     <a href="http://localhost/scripts/ecommerce/details.php?cat_id=3&brand_id=13">Reebok</a>
							     <a href="http://localhost/scripts/ecommerce/details.php?cat_id=3&brand_id=14">Sparx</a>
							</div>
					</div>
					<div class="dropdown">
							<button class="dropbtn">Watches 
			      			<i class="fa fa-caret-down"></i>
			    			</button>
			    			<div class="dropdown-content">
								<a href="http://localhost/scripts/ecommerce/details.php?cat_id=4&brand_id=15">Fastrack</a>
								<a href="http://localhost/scripts/ecommerce/details.php?cat_id=4&brand_id=16">Titan</a>
								<a href="http://localhost/scripts/ecommerce/details.php?cat_id=4&brand_id=17">Fossil</a>
								<a href="http://localhost/scripts/ecommerce/details.php?cat_id=4&brand_id=18">Casio</a>
								<a href="http://localhost/scripts/ecommerce/details.php?cat_id=4&brand_id=19">Sonata</a>
							</div>
					</div>
					<?php

						if(!isset($_SESSION['customer_email'])){


						
						echo "<a href='customer/login.php'>Login and SignUp</a>";
						
						}

						else{

							echo"<a href='logout.php'>LOGOUT</a>";
						}



						?>
						<a href="cart.php" style="float: right; text-decoration: none;" >My Cart</a>

				  </div>
				  <div>
				  	<h1> ABOUT US!</h1>
				  	<p> Returns is a scheme provided by respective sellers directly under this policy in terms of which the option of exchange, replacement and/ or refund is offered by the respective sellers to you. All products listed under a particular category may not have the same returns policy. For all products, the policy on the product page shall prevail over the general returns policy. Do refer the respective item's applicable return policy on the product page for any exceptions to the table below.

The return policy is divided into three parts; Do read all sections carefully to understand the conditions and cases under which returns will be accepted.</p>





				  </div>
				 </div>

				</body>

			</html>
				
