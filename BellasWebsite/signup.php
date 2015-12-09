<DOCTYPE! HTML>
	<html lang="en">
		<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            
		
            <link rel="stylesheet" type="text/css" href="Vendors/CSS/normalize.css">
            <link rel="stylesheet" type="text/css" href="Vendors/CSS/grid.css">
            <link rel="stylesheet" type="text/css" href="Vendors/CSS/ionicons.min.css">
            <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
			<link rel="stylesheet" type="text/css" href="Vendors/sweetalert-master/dist/sweetalert.css">
			<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
            
            <title>Sign Up</title>
			<script src="Vendors/sweetalert-master/dist/sweetalert.min.js"></script>
			<script src="Resources/JavaScript/javascript.js"></script>
        
			
		</head>
		<body>
			
		<header>
				<?php include 'top_navbar.php';?>
                <nav class="main-nav">
					<?php include 'navbar.php';?>
                </nav>
			</header>
			
			<section class="login">
				<div class="row">
					<div class="col span-1-of-2 box">
						<fieldset>
							<legend>Sign Up</legend>
							<form action="user_input.php" method="post">
								First Name: <input type="text" name="firstname">
								<br><br>
								Last Name: <input type="text" name="lastname">
								<br><br>
								Email: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="email">
								<br><br>
								Username: <input type="text" name="username">
								<br><br>
								Password: <input type="password" name="password">
								<br><br>
								<input type="submit" value="submit">
							</form>
						</fieldset>
					</div>
					
					<div class="col span-1-of-2 box">
						<fieldset>
							<legend> User Login </legend>
							<form action="#" method="post">
								Username: <input type="txt" name="username">
								<br><br>
								Password: <input type="password" name="password">
								<br><br>
								<input type="submit" value="submit">
							</form>
						</fieldset>
						
						<p class="already-login">Already have an account? Login here</p>
					</div>
				</div>
			</section>
		</body>


	</html>