<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LOGIN/REGISTER</title>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type= "text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/login.css">




<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/login.js"></script>
<script type="js/validate.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	.navbar{
		margin-top: 20px;}</style>
		

		
</head>
<body>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<div class="container">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <form id="login-form" action="login-exe.php" method="POST" role="form" style="display: block;">
                <h2>LOGIN</h2>
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="col-xs-6 form-group pull-left checkbox">
                    <input id="checkbox1" type="checkbox" name="remember">
                    <label for="checkbox1">Remember Me</label>   
                  </div>
                  <div class="col-xs-6 form-group pull-right">     
                        <input type="submit" name="login-exe" id="login-exe" tabindex="4" class="form-control btn btn-login" value="Log In">
                  </div>
              </form>
              

              <form id="register-form" action="reg_submit.php" method="post" role="form" style="display: none;">
                <h2>REGISTER</h2>

                	<div class="form-group">
                    <input type="text" name="firstname" id="firstname" onkeyup="Validate(this)" required class="form-control" placeholder="Firstname"/>
                    <div id="errFirst"></div>
                  </div>

                  <div class="form-group">
                    <input type="text" name="lastname" id="lastname" onkeyup="Validate(this)" class="form-control" placeholder="Lastname" required />
                    <div id="errLast"></div>
                  </div>

                  <div class="form-group">
                    <input type="text" name="username" id="username" onkeyup="Validate(this)" class="form-control" placeholder="Username" required >
                    <div id="errLast"></div>
                  </div>

                  <div class="form-group">
                    <input required type="text" name="email" id="email"  class="form-control" placeholder="Email Address" onchange="email_validate(this.value);" />
                    <div class="status" id="status"></div>
                  </div>

                  <div class="form-group">
                  	<input type="text" name="member" id="member" tabindex="1" class="form-control" placeholder="Enter Church Membership"
                  	value=""/>
                  </div>


                  <div class="form-group">
                  	<input type="text" name="location" id="location" tabindex="1" class="form-control" placeholder="Location"
                  	value=""/>
                  </div>


                  <div class="form-group">
                    <input required type="password" name="password" id="pass1" class="form-control" minlength="8" maxlength="20" placeholder="Password"/>
                  </div>


                  <div class="form-group">
                    <input type="password" name="confirm-password" id="pass2"  class="form-control" minlength="8" maxlength="20" placeholder="Confirm Password"
                    onkeyup= "checkPass();return false;" />
                  </div>
                  

                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="reg_submit" 4 class="btn btn-active" value="Register Now">
                      </div>
                    </div>
                  </div>
              

              </form>
            </div>
          </div>
        </div>
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6 tabs">
              <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
            </div>
            <div class="col-xs-6 tabs">
              <a href="#" id="register-form-link"><div class="register">REGISTER</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<?php include "footer.php"?>