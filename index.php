<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>
</head>
<body>
		<div clas="container">
				<div class= header>
					<p><a href="#">Sign In</a> / <a href="#">Sign Up</a></p>
					<p><a href="#">Forgot password</a></p>
				</div>

				<div class="title">
					<h1>Quick Post</h1>
				</div>
				<form method="post" action="con.php">
					<div class="title-news">
						<h3><?php echo $title ;?></h3>
					</div>
					<div class="title-news">
						<h3><?php echo $description ;?></h3>
					</div>
					<div class="news-footer">
						<p>posted by:<?php echo $name ;?></p>
						<p>date:<?php echo $date ;?></p>
					</div>
				</div>
		</div>

</body>
</html>