<?php include"session.php"; ?>
<?php include"header.php"; ?>
  <?php include"fetch-records.php"; ?>
  
<?php include"nav.php" ?>
    <div class="container-fluid">
  <?php include"sidebar.php";?>
      
   <div class="col-sm-9 col-sm-offset-3 col-md-10 
   col-md-offset-2 main" style="background-color:#FFFFFF; 
   opacity:0.8;">
         
      




        

          <h2 class="sub-header">Registered Users</h2>
          <div class="table-responsive">
            <table class="table table-striped table-bordered
       table-hover table-full-width" id="sample_1">
          <thead>
          <tr>
            <th>User ID</th>
          <th>Name</th>
                                  <th>Email</th>
                                                          <th>Phone</th>
                                                          <th>Username</th>
                                                          <th>Password</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                      
                              <?php  echo fetch_users_list($link) ?> 
                        
                        
                                                    
                                </tbody>
                              </table>
                            
                              </div>
                            </div>
                           
                        
 <?php include"footer.php" ?>
