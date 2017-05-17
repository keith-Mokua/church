<?php include"header.php" ?>
<body>
        <div class="container">
		
	<div class="row" style="background:#FFFFFF; opacity:0.8;">  
	<h3 style="font-family:'Lucida Calligraphy'; color:#FF3F00" 
	align="center">Fill all the fields to Register</h3> 
	<form action="reg-submit-exec.php" method="post" id="fileForm" role="form">
        <div class="col-md-6">
         
            <div class="form-group"> 	 
     <label for="firstname"><span class="req">* </span>
	  First name: </label>
    <input class="form-control" type="text" name="firstname" 
	id = "txt" onkeyup = "Validate(this)" required /> 
         <div id="errFirst"></div>    
            </div>

            <div class="form-group">
           <label for="lastname"><span class="req">* </span>
		    Last name: </label> 
    <input class="form-control" type="text" name="lastname" 
	id = "txt" onkeyup = "Validate(this)" 
	placeholder="input your last name" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
   <label for="email"><span class="req">* </span> 
   Email Address: </label> 
   <input class="form-control" required type="text" name="email"
    id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>
<div class="form-group">
            <label for="phonenumber"><span class="req">* </span>
			 Phone Number: </label>
    <input required type="text" name="phonenumber"
	 id="phone" class="form-control phone" maxlength="28"
onKeyUp="validatephone(this);" placeholder="not used for marketing"/> 
            </div>
        
        </div><!-- ends col-6 -->
   
            <div class="col-md-6">
            <div class="form-group">
      <label for="username"><span class="req">*
	   </span> User name:  <small>
	   This will be your login user name</small> </label> 
     <input class="form-control" type="text" name="username" 
	 id = "txt" onkeyup = "Validate(this)" 
	 placeholder="minimum 6 letters" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
  <label for="password"><span class="req">* 
  </span> Password: </label>
  <input required name="password" type="password" 
  class="form-control inputpass" minlength="4" maxlength="16"
    id="pass1" /> </p>

   <label for="password"><span class="req">*
    </span> Password Confirm: </label>
    <input required name="password" type="password" 
	class="form-control inputpass" minlength="4" maxlength="16"
	 placeholder="Enter again to validate"  id="pass2" 
	 onKeyUp="checkPass(); return false;" />
         <span id="confirmMessage" class="confirmMessage"></span>
            </div>

            <div class="form-group">
            <?php //$date_entered = date('m/d/Y H:i:s'); ?>
      <input type="hidden" value="<?php //echo $date_entered; ?>" 
	  name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                <hr>
            <div class="form-group">
  <input class="btn btn-success" type="submit" name="submit_reg" 
  value="Register">
            </div>
             </fieldset>
            </form><!-- ends register form -->
            </div>
	</div>
</div>
       <?php include"footer.php" ?>