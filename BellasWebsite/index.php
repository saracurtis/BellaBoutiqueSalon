<DOCTYPE! HTML>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            
            <link rel="stylesheet" type="text/css" href="Vendors/CSS/normalize.css">
            <link rel="stylesheet" type="text/css" href="Vendors/CSS/grid.css">
            <link rel="stylesheet" type="text/css" href="Vendors/CSS/ionicons.min.css">
            <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
			<link rel="stylesheet" type="text/css" href="Vendors/sweetalert-master/dist/sweetalert.css">
			<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400italic' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" type="text/css" href="Vendors/slick/slick.css"/>
			<link rel="stylesheet" type="text/css" 
  href="http://cdn.jsdelivr.net/jquery.slick/1.3.7/slick.css"/>
            <title>Bella Boutique Salon</title>
			<script src="Vendors/sweetalert-master/dist/sweetalert.min.js"></script>
			<script src="Resources/JavaScript/javascript.js"></script>
        
        </head>
        <body onload="onLoad()">
            <header>
				<?php include 'top_navbar.php';?>
                <nav class="main-nav">
					<?php include 'navbar.php';?>
                </nav>
			</header>
          
	
          
            <section class="home">
				<h2> Bella's Barbies, FABULOUS!</h2>
				<div class="row">
					<div class="col span-1-of-3 box">
						<img src="Resources/Images/bellaBlackReverse.jpg" alt="Bella picture 1" class="bella-img1">
					</div>
					<div class="col span-1-of-3 box">	
						  <div class="carousel">
                     		<img src="Resources/Images/client6.jpg" alt="Client" class="clients">
                       		<img src="Resources/Images/client2.jpg" alt="Client" class="clients">
                        	<img src="Resources/Images/client3.jpg" alt="Client" class="clients">
                        	<img src="Resources/Images/client7.jpg" alt="Client" class="clients">
                          	<img src="Resources/Images/client5.jpg" alt="Client" class="clients">
							<img src="Resources/Images/client9.jpg" alt="Client" class="clients">
							<img src="Resources/Images/client8.jpg" alt="Client" class="clients">  
                    	 </div>
                    </div>
                    <div class="col spna-1-of-3 box">
						<img src="Resources/Images/bellaBlack.jpg" alt="Bella picture 2" class="bella-img2">
					</div>
				</div>
			</section>
			
			
			<section class="bundles">
				<h2 id="bundleLink">Need Bundles? Order Today! <br> Top Quality Hair, Sapphire Select</h2>
				  <ul class="bundle-showcase clearfix">
					<li>
						<figure class="bundle-photo">
							<img src="Resources/Images/sapphire-straight.jpg" alt="Sapphire straight brazilian hair">
						</figure>
					</li>

					<li>
						<figure class="bundle-photo">
							<img src="Resources/Images/sapphire-loosewave.jpg" alt="Sapphire loose wave brazilian hair">
						</figure>  
					</li>

					<li>
						<figure class="bundle-photo">
							<img src="Resources/Images/sapphire-deepwave.jpg" alt="Sapphire deep wave brazilian hair">
						</figure>  
					</li>
					 
					 <li>
					  	<figure class="bundle-photo">
							<img src="Resources/Images/sapphire-bodywave.jpg" alt="Sapphire body wave brazilian Hair"> 
						</figure>
					  </li>
				</ul>
				
					<a class="btn btn-full" href="buyHair.html">Buy Now</a>
				
				
			</section>
			
			<section class="bella-barbies">
				<h2>Leave A Comment</h2>
				
				<form action="" method="post">
					<fieldset>
						<label for="handle">Name:</label>
						<input type="text" name="name" id="name" maxlength="64"/>
						<br> <br>
						<div class="comments">
						<label for="comment">Comment:</label>
						<textarea rows="6" cols="50" name="comment" id="comment" maxlength="150"></textarea>
						</div>
						<br>
						<input type="submit" value="Submit"/>
 					</fieldset>
				</form>
				
				
			</section>
			
			
			<section class="map">
				<h1 id="mapLink">Come Visit Us!</h1>
					<div class="row">
						<div class="col span-2-of-3 box">
				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="637" height="322" src="https://maps.google.com/maps?hl=en&q=506 165th street, Hammond, IN&ie=UTF8&t=roadmap&z=15&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://buyproxies.io/">buy private proxies</a></small></div></iframe>
						</div>
						<div class="col span-1-of-3 box">
							<ul class="info">
								<li>Located inside Kali Beauty<br> Hammond Location</li>
								<li>Call us at: <br>219-###-####</li>
								<li>Hours of Operation:<br>9:00am-9:00pm <br> We take our last client at 7:00pm</li>
							</ul>
						</div>
					</div>	
			</section>
			
			<footer>
				<p class="copyright"> Copyright &copy; Bella Boutique Salon | 2015 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Designed By: IT DesignHER</p>
				<br>
				<ul class="bottom-info">
					<li>Contact Us</li>
					<li>|</li>
					<li>Careers</li>
					<li>|</li>
					<li>Location</li>
					<li>|</li>
					<li>Hours</li>
					<li>|</li>
					<li>FAQs</li>
					
				</ul>
				
				<img src="Resources/Images/secure-payments.jpeg" alt="We accept PayPal" class="paypal">
					
			</footer>
			
			
			<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
			<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			<script type="text/javascript" src="Vendors/slick/slick.min.js"></script>
			<script src="Resources/JavaScript/javascript.js"></script>
        </body>
    </html>