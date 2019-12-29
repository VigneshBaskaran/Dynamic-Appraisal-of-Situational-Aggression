<!DOCTYPE html>

<html lang="en">

<head>

  <title>Bootstrap Example</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>





<div class="container">

  <h1>The Patient is under moderate risk. Apply the following:</h1> 

  <form class="form-horizontal" role="form" method="POST" id="strategies1Form" name="strategies1Form">



    <div class="checkbox">

      <label><input type="checkbox" id="irritable" name="irritable" value="checked">Irritability</label>

    </div>



    <div class="checkbox">

      <label><input type="checkbox" id="implusive" name="implusive" value="checked">Impulsivity</label>

    </div>

    

    <div class="checkbox">

      <label><input type="checkbox" id="unwilling" name="unwilling" value="checked">Unwillingness to follow directions </label>

    </div>



    <div class="checkbox">

      <label><input type="checkbox" id="sensitive" name="sensitive" value="checked">Sensitive to perceived provocation </label>

    </div>



    <div class="checkbox">

      <label><input type="checkbox" id="easily" name="easily" value="checked">Easily angered when requests are denied </label>

    </div>



    <div class="checkbox">

      <label><input type="checkbox" id="negative" name="easily" value="checked"> Negative attitudes</label><br />

    </div>



    <div class="checkbox">

      <label><input type="checkbox" id="verbal" name="verbal" value="checked">Verbal threats</label> <br />

    </div>



    <div class="form-group">        

      <div class="col-sm-offset-2 col-sm-10">

        <button type="submit" class="btn btn-default">Login</button>

      </div>

    </div>



  </form>

</div>

<?php
include('header.php');
$patientUniqueIdentifier = 2323432;
$patientDASACount = 0;
$patientQuestionOne = $patientQuestionTwo = $patientQuestionThree = "";
$patientQuestionFour = $patientQuestionFive = $patientQuestionSix = $patientQuestionSeven = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

	if(isset($_POST["irritable"]) && !empty($_POST["irritable"])) {
		$patientQuestionOne = $_POST["irritable"];
	}

  	if(isset($_POST["implusive"]) && !empty($_POST["implusive"])) {
    $patientQuestionTwo = $_POST["implusive"];
  }

  if(isset($_POST["unwilling"]) && !empty($_POST["unwilling"])) {
    $patientQuestionThree = $_POST["unwilling"];
  }

  if(isset($_POST["sensitive"]) && !empty($_POST["sensitive"])) {
    $patientQuestionFour = $_POST["sensitive"];
  }

  if(isset($_POST["easily"]) && !empty($_POST["easily"])) {
    $patientQuestionFive = $_POST["easily"];
  }

  if(isset($_POST["negative"]) && !empty($_POST["negative"])) {
    $patientQuestionSix = $_POST["negative"];
  }

  if(isset($_POST["verbal"]) && !empty($_POST["verbal"])) {
    $patientQuestionSeven = $_POST["verbal"];
  }

  #echo $patientUniqueIdentifier; 
  #echo $patientQuestionOne;
  #echo $patientQuestionTwo;
  #echo $patientQuestionThree;
  #echo $patientQuestionFour;
  #echo $patientQuestionFive;
  #echo $patientQuestionSix;
  #echo $patientQuestionSeven;

  if($patientQuestionOne == "checked") {
  	$patientDASACount++;
  	
  }

  if($patientQuestionTwo == "checked") {
  	$patientDASACount++;
  }

  if($patientQuestionThree == "checked") {
  	$patientDASACount++;
  }

  if($patientQuestionFour == "checked") {
  	$patientDASACount++;
  }

  if($patientQuestionFive == "checked") {
  	$patientDASACount++;
  }

  if($patientQuestionSix == "checked") {
  	$patientDASACount++;
  }

  if($patientQuestionSeven == "checked") {
  	$patientDASACount++;
  }

  echo $patientDASACount;

  if($patientDASACount == 0) {
  	header("Location: Strategies1.php");
  	echo "Patient is low risk";
  	die();
  }

  if($patientDASACount <= 3 && $patientDASACount >= 1) {
	header("Location: Strategies2.php");
  	echo "Patient is moderate risk";
  }

  if($patientDASACount <= 7 && $patientDASACount >= 4) {
  	header("Location: Strategies3.php");
  	echo "Patient is high risk";
  }
    
}


?>

</body>

</html>