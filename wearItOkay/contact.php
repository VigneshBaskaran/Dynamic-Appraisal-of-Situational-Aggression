<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wear It Okay | Contact Page</title>
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

<div class="container">
  <h2>Contact Us!</h2>
  <p>Whether you have a problem or would like to say something nice, please let us know.</p>
</div>
  
<div class="container">
  <p>What is your enquiry about?</p>
  <form role="form">
    <div class="checkbox">
      <label><input type="checkbox" value="technical">Technical</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="product">Product</label>
    </div>
  </form>
</div>
  
<div class="container">
  
  <form role="form">
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>     
     <div class="modal-footer">
          <button type="button" class="btn btn-default">Submit</button>
        </div>
  </form>
</div>


</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<footer class="container-fluid text-center">
  <p>&copy; Wear It Okay</p>
</footer>

</body>
</html>