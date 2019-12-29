<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wear It Okay | Registration Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
	
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<?php



		header("Cache-Control: no-cache, must-revalidate");
		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$email = test_input($_POST["email"]);
			$pwd = test_input($_POST["pwd"]);
			$fName = test_input($_POST["fName"]);
			$lName = test_input($_POST["lName"]);
			
			
			
			$passwordError = "";
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))  {
			//	echo "<div class=alert alert-danger" role="alert">Error</div>"";
			
				$emailErr = "<p>Email address is not valid</p>";
			} 
			
			//Gets the character length of the inputted password.
			$stringLength = strlen(utf8_decode($pwd));
			
			// Checks if the string length is less than or equal to 0, in which case the user must re-input the password.
			if($stringLength <= 0)
			{
				$passwordTooSmall = "Please enter a password";
				$passwordError = $passwordTooSmall;
			}
			
			// Checks if the string length is greater than 20, in which case the user must re-input the password.
			if($stringLength > 20)
			{
				$passwordTooLarge = "Your password too big.Your password must be between 1-20 characters";
				$passwordError = $passwordTooLarge;
			}
			
			$explanationMark = '!';
			$pos = strpos($pwd, $explanationMark);
			
			if($pos == true)
			{
				$containsChar = "Exclamation mark found in your password!";
				$passwordError = $containsChar;
			}
			
				$servername = localhost;
				$username = "aaronvilla24";
				$password = "Beckhamcurveshot#2";
				$databaseName = "wearitokay";
				
				//Create connection 
				$connection = @mysqli_connect($servername, $username, $password, $databaseName);
				
				//$emailExists = false;
				
				//$emailExists = check_for_existing_email_address($email, $connection);
				
				
				$SQLstring = "select * from CUSTOMER_LOGIN_NFORMATION";
				$connection = mysqli_connect($servername, $username, $password, $databaseName);
				$queryResult = mysqli_query($connection, $SQLstring)
				
					Or die ("<p>Unable to query the CUSTOMER_LOGIN_NFORMATION table.</p>"."<p>Error code ". mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect)). "</p>";

					echo "<hr>";
					echo "<h1>content of CUSTOMER_LOGIN_NFORMATION table</h1>";
					echo "<table width='100%' border='1'>";
					echo "<th>Email</th><th>testword</th><th>First Name</th><th>Last Name</th>";
						$row = mysqli_fetch_row($queryResult);
						
						
						
						while ($row) {
							echo "<tr><td>{$row[0]}</td>";
							echo "<td>{$row[1]}</td>";
							echo "<td>{$row[2]}</td>";
							echo "<td>{$row[3]}</td></tr>";
							
							if($row[0] == $email)
							{
								$count++;
							}
							
							$row = mysqli_fetch_row($queryResult);
						}
						
						echo "</table>";
						
							if($count > 0) {
								echo "<p>Email already exists</p>";
								echo "<p>{$count}</p>";
							
							} else {
							
							if(!$connection) {
								die("Connection failed: " . mysqli_connect_error());
							}
							
							if($fName == null || $fName == "")
							{
								echo "<p>First Name is empty!</p>";
							}
							
							if($lName == null || $lName == "")
							{
								echo "<p>Last Name is empty!</p>";
							}
							
							if($email == null || $email == "")
							{
								echo "<p>Email is empty!</p>";
							} 
							
							if($pwd == null || $pwd == "")
							{
								echo "<p>Password is empty!</p>";
							} else {
								
							
								$sql = "INSERT INTO CUSTOMER_LOGIN_NFORMATION (CUSTOMER_EMAIL, CUSTOMER_PASSWORD, CUSTOMER_FIRST_NAME, CUSTOMER_LAST_NAME) VALUES ('$email', '$pwd','$fName', '$lName')";
				
								$result = mysqli_query($connection, $sql);
				
								if(!result) {
									
									die('Invalid query: ' . mysqli_error());
									
								} else {
									$alertResult = '<div class="alert alert-success"><strong>Thank you for yourregistering!</strong></div>';
									
								}
							}
							
							
								}
					mysql_close($connection);
		}
			
			
		
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Wear It Okay</h1>      
    <p>Love the way you look!</p>
  </div>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Wear It Okay!</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="aboutUs.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	    
        <li><a href="#"><span class="" id="myBtn" data-toggle="modal" data-target="#loginModal"></button>Login</a></li>
		
		<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        </form>
	  
	  </ul>

    </div>
  </div>
</nav>

 <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
		  
        </div>
         
		 
  
  <div class="modal-body">
  <h2>Login here!</h2>
  
  
	<form role="form">
    <div class="form-group">
      <label for="inputdefault">Email</label>
      <input class="form-control" name="loginEmail" id="loginEmail" type="email">
    </div>
	
	<div class="form-group">
      <label for="inputdefault">Password</label>
      <input class="form-control" name="loginPwd" id="loginPwd" type="password">
    </div>
	
	<p>Not Registered?</p>
	<a href="register.php"><span class="register" id="registerationButton"></button>Register Here!</a>
	
	</form>
	</div>
  
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Submit</button>
        </div>
      </div>
      
    </div>
  </div>

  <?php
  
    // Login stuff 
	header("Cache-Control: no-cache, must-revalidate");
				
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$loginEmail = test_input_login($_POST["loginEmail"]);
					$loginPwd = test_input_login($_POST["loginPwd"]);
					
					if($loginEmail == "" || $loginEmail == null)
					{
						echo "<p>Email is empty!</p>";
					}
					
					if($loginPwd == "" || $loginPwd == null)
					{
						echo "<p>Password is empty!</p>";
						
					}  else {
									
									
									$servername = localhost;
									$username = "aaronvilla24";
									$password = "Beckhamcurveshot#2";
									$databaseName = "wearitokay";
									
									$SQLstring = "select * from CUSTOMER_LOGIN_NFORMATION";
									$connection = @mysqli_connect($servername, $username, $password, $databaseName);
									$queryResult = @mysqli_query($connection, $SQLstring)
										Or die ("<p>Unable to query the CUSTOMER_LOGIN_NFORMATION table.</p>"."<p>Error code ". mysqli_errno($connection). ": ".mysqli_error($connection)). "</p>";

									
									
										$row = mysqli_fetch_row($queryResult);
										
										while ($row) {
											
											echo "<p>{$row[0]}</p>";
											if($row[0] == $loginEmail)
											{
												echo "<p>Email matches</p>";
												$loginEmailCount++;
											}
											
											echo "<p>{$row[1]}</p>";
											
											if($row[1] == $loginPwd)
											{
												echo "<p>Password Matches</p>";
												$loginPasswordCount++;
											}
											
											
											$row = mysqli_fetch_row($queryResult);
										}
										
										
										
										if($loginEmailCount > 0)
										{
											echo "<p>Email is correct</p>";
										}
										
										if($loginPasswordCount > 0)
										{
											echo "<p>Password is correct</p>";
										}
									
								}
											echo "<p>1 is good, 0 is bad</p>";
											echo "<p>{$loginEmailCount}</p>";
											echo "<p>{$loginEmail}</p>";
											echo "<p>1 is good, 0 is bad</p>";
											echo "<p>{$loginPasswordCount}</p>";
											echo "<p>{$loginPwd}</p>";
				}
				
				
			function test_input_login($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		} 
		
		
  ?>
  
  <?php
  echo $result;
  ?>
<div class="container">
  <h2>Register Here to get started!</h2>
  <form class="form-horizontal" role="form" method="post">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="fName" id="fName" placeholder="Enter your first name!">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="lName" id="lName" placeholder="Enter your last name!">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<footer class="container-fluid text-center">
  <p>&copy; Wear It Okay</p>
</footer>




</body>
</html>