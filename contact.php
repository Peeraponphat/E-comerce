<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="icon" href="img/mewai.png" type="image/png">
	<link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/nice-select/nice-select.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<?php
	include "Header.php";
	?>
    	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>ME WAI Inc.</p>
							<p>199, Village No.6</p>
							<p>Thung Sukhla Sub-district </p>
							<p>Sriracha District, Chonburi, 20230 </p>
							<p>Mobile: 0-3835-4580-4</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: peerapon.pom@ku.th</p>
	    				</address>
						<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>	
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"></a>
									<a href="#"><i class="fab fa-facebook-square"style='font-size:36px;color:#000066'></i></a>
									<a href="#"><i class="fab fa-twitter-square"style='font-size:36px;color:#00CCFF'></i></a>
									<a href="#"><i class="fab fa-glide"style='font-size:36px;color:#FFD700'></i></a>
									<a href="#"><i class="fab fa-youtube "style='font-size:36px;color:red'></i></a>
							
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
    <?php
	include "Footer.php";
	?>
</body>

</html>