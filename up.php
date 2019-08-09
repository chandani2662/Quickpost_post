<!DOCTYPE html>
<html>
<head>
	<title>Register here</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <link rel = "stylesheet" type = "text/css" href = "up.css"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <script src="up.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
	<div class="main_content">
	<div class="contain">
		<h2>Register here</h2>
		<form action="con.php" method="post">
			<div class="form-group">
				<label><i class="fa fa-user-circle-o" aria-hidden="true"></i></label>
				<input type="text" name="username" class="form-control" required>
			</div>			
			<div class="form-group">
				<label><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
				<input type="text" name="email" class="form-control" required>
			</div>

			 <!--<label for="psw">Password:</label>
    					<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br/>
    			
    			<label for="txtConfirmPassword">Confirm Password:</label>
    					<input type="password" id="txtConfirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br/>-->

    		<div class="form-group">
				<label for="password"><i class="fa fa-key" aria-hidden="true"></i></label>
				<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
			</div>

			<div class="form-group">
				<label for="confirm_password"><i class="fa fa-key" aria-hidden="true"></i></label>
    			<input type="password" name="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
    		</div>
			

			<div class="form-group">
				<input type="checkbox" id="agree" name="agree">
				<label for="agree">I agree with the <a href="#">term and conditions</a></label>	
			</div>

			<div class="form-group">
  	  			<button type="submit" class="btn" name="register">Register</button>
			</div>


		</form>
	</div>
</div>
</div>
				
</body>
</html>