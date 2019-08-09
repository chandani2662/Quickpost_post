
<!DOCTYPE html>
<html>
<head>
  <title>sign in</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="in.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body>
  <div class="content">
      <div class="main_content">
            <div class="body_content">

                <div class="header">
                  <h1>Sign In</h1>
                </div>
              <form method="post" action="con.php">

                <div class="container">
                  <label><i class="fa fa-user-circle-o" aria-hidden="true"></i></label>
                  <input type="text" name="username">
                </div>
              

                <div class="container">
                  <label for="password"><i class="fa fa-key" aria-hidden="true"></i></label>
                  <input type="password" name="password"  >
                </div>
                <div class="container_a">
                  <button type="submit" name="signin" class="btn">Sign in</button>
                </div>  	
                  <p>
                    Not yet a member? <a href="up.php">Sign up</a>
        	        </p>
                  <p>
                      <a href="#">Forget password</a>
                  </p>
            </form>
        </div>
    </div>
  </div>
</body>
</html>