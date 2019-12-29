<!DOCTYPE HTML>
<html>
<head>
<title>Login Page | DASA</title>
  <meta charset="utf-8">
  <meta name="description" content="DASA LOGIN" />
  <meta name="keywords" content="DASA,login,sign up " />
  <meta name="author" content="DASA TEAM SWIN" />
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

<div class="container">
  <h2>Login To Our System</h2>
  <br>
  <form class="form-horizontal" role="form" method="post" action="Options.html" id="logform">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="uniqueIndentifier">User Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="uname" id="uname" placeholder="Enter Username">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="uniqueIndentifier">Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
       </div>
    </div>

    

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Login</button>
      </div>
    </div>

</div>

</form>

</body>
</html>