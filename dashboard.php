<?php include"header.php"; ?>
  <?php include"fetch-records.php"; ?>
  
<h1 class="page-header">Dashboard</h1>
    <div class="container-fluid">
  <?php include"sidebar.php";?>
      
   <div class="col-sm-9 col-sm-offset-3 col-md-10 
   col-md-offset-2 main" style="background-color:#FFFFFF; 
   opacity:0.8;">
        <h4>Verse of the day</h4>  
      <div class="form-group" style="height:115px width:20px ">
          <input type="text" name="firstname" id="verse" class="form-control" placeholder="Enter verse of the day"/>
                    
        </div>
       <div class="col-lg-12 text-center">
          <div id="success"></div>
          <button type="submit" class="btn btn-xl">Submit</button>
      </div>
      <br>
      <br>

      <form id="announcments"  action="announcments_submit.php"  method="POST" role="form"> 
        <h4>Announcments</h4>
      <div class="form-group" style="height:115px width:20px ">
          <input type="text"  class="form-control" placeholder="Enter announcments"/>
                    
        </div>
       <div class="col-lg-12 text-center">
          <div id="success"></div>
          <button type="submit" name="announcments_submit" class="btn btn-xl">Submit</button>
      </div>
      </form>
      <br>
      <br>






  </div>
                           
 <?php include"footer.php" ?>
