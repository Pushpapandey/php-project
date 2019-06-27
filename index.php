

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link rel="shortcut icon" href="1.png" />

<style>
  body{
   


   
  }
.navbar {                            
    -webkit-box-shadow: 0 16px 6px -6px #999;
    -moz-box-shadow: 0 16px 6px -6px #999;
    box-shadow: 0 16px 6px -6px #999;

    /* the rest of your styling */
}
.banner-curve {
    position: absolute;
    bottom: -30px;
    left: -5px;
    width: calc(100% + 10px);

    -webkit-box-shadow: 0 10px 6px -6px #999;
    -moz-box-shadow: 0 10px 6px -6px #999;
    box-shadow: 0 10px 6px -6px #999;
}
.padding{
  padding-top: 40px;
  background-color: #212529;
  color: #FFF;
  margin-top: 25px;
}
html {
  scroll-behavior: smooth;
}
.form-check{
  display: inline-block;
}
/*.carousel-inner{
  width:100%;
  max-height: 500px !important;
}*/

.form-control1{
  border-color: #FF0000!important; 
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 25px rgba(255, 0, 0, 0.6)!important;
}
</style>
  <title>FACEBOOK</title>
</head>
<body>

<!-- LOAD NAVBAR HERE -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow p-3">
  <a class="navbar-brand" href="#" title="Site that releases Happiness" ><img src="1.png" height="50px"  title="C8H11NO2"/>FACEBOOK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" ria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#create_account">Create Account</a>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link" href="#login">Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST">
      <input type="email" class="form-control mr-sm-2" placeholder="Enter Email" aria-label="Search" id="login" name="mail" required>
      <input type="password" class="form-control mr-sm-2" placeholder="Enter Password" aria-label="Search" name="passwd" required>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="loginSmt">Login</button>
    </form>
  </div>
</nav>



<div class="container padding" id="create_account">
  <!-- Create Account -->

<form method="POST">
  <h3>Create Account</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off" name="mail" required value="<?php if(isset($_POST['submit'])) echo($_POST['mail'])?>">
    <small class="bg-danger"><?php echo $errorString;?></small>
  </div>
  
    <div class="form-group">
    <label for="exampleInputFirstName1">First Name</label>
    <input type="name" class="form-control" id="fname" aria-describedby="fnameHelp" placeholder="Enter First Name" autocomplete="off" name="fname" required value="<?php if(isset($_POST['submit'])) echo($_POST['fname'])?>">
  </div>
    <div class="form-group">
    <label for="exampleInputname1">Last Name</label>
    <input type="name" class="form-control" id="lname" aria-describedby="lnameHelp" placeholder="Enter Last Name" autocomplete="off" name="lname" required value="<?php if(isset($_POST['submit'])) echo($_POST['lname'])?>">
  </div>
      <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input type="text" class="form-control" id="address" aria-describedby="addHelp" placeholder="Enter Address" autocomplete="off" name="address" required value="<?php if(isset($_POST['submit'])) echo($_POST['address'])?>">
  </div>
  <h6>Gender:</h6>
<div style="margin: 10px;"><div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="M" checked>
  <label class="form-check-label" for="exampleRadios1">
    <img src="male.png" height="20px" width="20px"> Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="F">
  <label class="form-check-label" for="exampleRadios2">
    <img src="female.png" height="20px" width="20px">Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="O">
  <label class="form-check-label" for="exampleRadios2">
    <img src="other-gender.png" height="20px" width="20px">Other
  </label>
</div>
  <div class="form-group">
    <label for="exampleInputPhone1">Phone Number</label>
    <input type="text" class="form-control" id="ph_no" aria-describedby="phoneHelp" placeholder="Enter Phone Number" autocomplete="off" name="ph_no" required value="<?php if(isset($_POST['submit'])) echo($_POST['ph_no'])?>">
    <small class="bg-danger"><?php echo $errorPhone;?></small>
  </div>

  <!-- PHONE NUMBER VALIDATION HERE!!! -->



  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" placeholder="Password" autocomplete="off" name="passwd1" required value="<?php if(isset($_POST['submit'])) echo($_POST['passwd1'])?>">
    <small class="bg-danger"><?php echo $errorPasswd;?></small>
  </div>
  

<!-- DATABASE CONNECTION HERE!!! -->

    <div class="form-group">
    <label for="exampleInputPassword2">Re-enter Password</label>
    <input type="password" class="form-control" id="Reenter" placeholder="Re-enter Password" name="passwd2" required value="<?php if(isset($_POST['submit'])) echo($_POST['passwd2'])?>">
    <small class="bg-danger"><?php echo $errorCheck;?></small>
  </div>
  <small>Choose a password of atleast 8 characters,one lowercase,one uppercase and one special Character.</small>
    <div class="form-group">
    <label for="Date">Date of Birth</label>
    <input type="date" class="form-control" id="date" name="dob" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
</form>
</div>

</body>
</html>
