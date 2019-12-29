<!DOCTYPE html>

<html lang="en">

<head>

  <title>Low Risk | DASA</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>



<nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>                        

      </button>

      <a class="navbar-brand" href="index.php">DASA</a>

    </div>

    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">

        

        <li><a href="index.php">New Patient</a></li>

        <li><a href="patientDirectory.php">Patient Directory</a></li>

       

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



<div class="container">

  <h1>The Patient is under low risk. Apply the following:</h1> 

  <form class="form-horizontal" role="form" method="post" action="" id="strategies1Form" name="strategies1Form">

    <div class="checkbox">

      <label><input type="checkbox" id="observation" name="observation" value="checked" checked>Observation with engagement</label>

    </div>



    <div class="checkbox">

      <label><input type="checkbox" id="reassurance" name="reassurance" value="checked" checked>Reassurance </label>

    </div>

    

    <div class="form-group">        

      <div class="col-sm-offset-2 col-sm-10">

        <button type="submit" class="btn btn-default">Login</button>

      </div>

    </div>



  </form>

</div>

<?php

$patientLowRiskObservationStrategy = $patientLowRiskReassurance = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["observation"]) && !empty($_POST["observation"])) {
		$patientLowRiskObservationStrategy = $_POST["observation"];
	}

	if(isset($_POST["reassurance"]) && !empty($_POST["reassurance"])) {
		$patientLowRiskReassurance = $_POST["reassurance"];
	}

	echo "Strategies Selected\n";
	echo $patientLowRiskReassurance;
	echo $patientLowRiskObservationStrategy;
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



</body>

</html>