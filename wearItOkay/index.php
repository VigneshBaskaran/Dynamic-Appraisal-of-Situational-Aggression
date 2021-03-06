<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wear It Okay | Home Page</title>
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

<div class="jumbotron">
  <div class="container text-center">
    <h1>WearItOkay</h1>      
    <p>You decide your gender, so Wear It and feel Okay!</p>
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
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	    
        <li><a href="#"><span class="" id="myBtn" data-toggle="modal" data-target="#loginModal"></button>Login</a></li>
		
		<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" name="search" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
		</form>
	  </ul>

    </div>
  </div>
</nav>

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
		
		
	
	
		$search = $_GET["search"];
		
		if($search != null || $search != "")
		{
			echo "<p>You have search for {$search}</p>";
		}
	
?>

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
      <input class="form-control" id="inputdefault" type="text">
    </div>
	
	<div class="form-group">
      <label for="inputdefault">Password</label>
      <input class="form-control" id="inputdefault" type="text">
    </div>
	
	<p>Not Registered?</p>
	<a href="register.php"><span class="register" id="registerationButton"></button>Register Here!</a>
	
	</form>
	</div>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
        </div>
      </div>
      
    </div>
  </div>
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://placehold.it/1200x400?text=IMAGE" alt="Image">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>      
      </div>

      <div class="item">
        <img src="http://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>&copy; Wear It Okay</p>
</footer>

</body>
</html>
