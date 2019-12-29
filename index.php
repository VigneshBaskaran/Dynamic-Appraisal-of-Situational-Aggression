<!DOCTYPE HTML>
<html>
<head>
<title>New Patient | DASA</title>
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

<div class="container">
  <h2>New Patient</h2>
  <form class="form-horizontal" role="form" method="post">
  
  	<div class="form-group">
  	  <label class="control-label col-sm-2" for="uniqueIndentifier">Patient Unique Identifier:</label>
  	  <div class="col-sm-10">
  	    <input type="text" class="form-control" name="uniqueIndentifier" id="uniqueIndentifier" placeholder="Enter this patients unique identifier">
  	  </div>
  	</div>

  	<div class="form-group">
  	  <label class="control-label col-sm-2" for="dateOfAdmission">Patient Date of Admission:</label>
  	  <div class="col-sm-10">
  	    <input type="text" class="form-control" name="dateOfAdmission" id="dateOfAdmission" placeholder="Enter this patients date of admission">
  	  </div>
  	</div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="firstName">Patient First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter your first name!">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="lastName">Patient Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter your last name!">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Patient Gender:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="gender" id="gender" placeholder="Enter your last name!">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="homePhone">Home Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="homePhone" id="homePhone" placeholder="Home Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="mobilePhone">Mobile Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="mobilePhone" id="mobilePhone" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="maritalStatus">Marital Status</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="maritalStatus" id="maritalStatus" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="age" id="age" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nationality">Nationality: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="streetAddress">Street Address: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="streetAddress" id="streetAddress" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="suburb">Suburb: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="suburb" id="suburb" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="postCode">Post Code: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="postCode" id="postCode" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="state">State: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="state" id="state" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="country">Country</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="country" id="country" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="parentOneName">Parent One Name: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="parentOneName" id="parentOneName" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="parentOneRelation">Parent One Relation: </label>
      <div class="col-sm-10">
        <input type="texttext" class="form-control" name="parentOneRelation" id="parentOneRelation" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="parentOnePhoneNumber">Parent One Phone Number: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="parentOnePhoneNumber" id="parentOnePhoneNumber" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="parentOneEmailAddress">Parent One Email Address: </label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="parentOneEmailAddress" id="parentOneEmailAddress" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="parentTwoName">Parent Two Name: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="parentTwoName" id="parentTwoName" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="parentTwoRelation">Parent Two Relation: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="parentTwoRelation" id="parentTwoRelation" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="parentTwoPhoneNumber">Parent Two Phone Number</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="parentTwoPhoneNumber" id="parentTwoPhoneNumber" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="parentTwoEmailAddress">Parent Two Email Address: </label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="parentTwoEmailAddress" id="parentTwoEmailAddress" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="spouseName">Spouse Name: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="spouseName" id="spouseName" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="numberOfChildren">Number Of Children</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="numberOfChildren" id="numberOfChildren" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nameOfChildOne">Name of Child One</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nameOfChildOne" id="nameOfChildOne" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nameOfChildTwo">Name of Child Two</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nameOfChildTwo" id="nameOfChildTwo" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nameOfChildThree">Name of Child Three</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nameOfChildThree" id="nameOfChildThree" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nameOfChildFour">Name of Child Four</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nameOfChildFour" id="nameOfChildFour" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="emergencyContactName">Emergency Contact Name: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="emergencyContactName" id="emergencyContactName" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="emergencyContactRelation">Emergency Contact Relation: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="emergencyContactRelation" id="emergencyContactRelation" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="emergencyContactPhoneNumber">Emergency Contact Phone Number: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="emergencyContactPhoneNumber" id="emergencyContactPhoneNumber" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="occupation">Occupation: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="occupationTimeLength">Occupation Time Length: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="occupationTimeLength" id="occupationTimeLength" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="previousEmployer">Previous Employer</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="previousEmployer" id="previousEmployer" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="previousEmployerContactName">Previous Employer Contact Name: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="previousEmployerContactName" id="previousEmployerContactName" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="previousEmployerContactPhoneNumber">Previous Employer Contact Phone Number: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="previousEmployerContactPhoneNumber" id="previousEmployerContactPhoneNumber" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="previousEmployerContactEmailAddress">Previous Employer Contact Email Address: </label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="previousEmployerContactEmailAddress" id="previousEmployerContactEmailAddress" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="previousDoctorName">Previous Doctor Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="previousDoctorName" id="previousDoctorName" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="previousDoctorPhoneNumber">Previous Doctor Phone Number: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="previousDoctorPhoneNumber" id="previousDoctorPhoneNumber" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="previousDoctorEmailAddress">Previous Doctor Email Address</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="previousDoctorEmailAddress" id="previousDoctorEmailAddress" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="previousHospitalName">Previous Hospital Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="previousHospitalName" id="previousHospitalName" placeholder="Mobile Phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="hobbies">Hobbies</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="hobbies" id="hobbies" placeholder="Mobile Phone">
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





</body>
</html>