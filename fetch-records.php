<?php 

//Fetch Members Function
function fetch_users_list($link) {
	
 $query = mysqli_query($link, "SELECT * FROM users  
 ORDER BY user_id ASC");
			
		while($row = mysqli_fetch_array($query)) {
						$user_id = $row['user_id'];
						$firstname = $row['firstname'];
						$lastname = $row['lastname'];
						$username = $row['username'];
						$email= $row['email'];
						$member = $row['member'];
						$location = $row['loction'];
						$password = $row['password'];
						
						
							?><tr>
						     <td><?php echo $user_id; ?> </td>
				             <td><?php echo $firstname; ?> <?php echo $lastname; ?></td>
                              <td><?php echo $email; ?></td>
							  <td><?php echo $member; ?></td>
							  <td><?php echo $loction; ?></td>
							  <td><?php echo $password; ?></td>
							<td>
							<?php if($row['status'] == '1') {
							 echo "<label class='btn btn-success' 
							 style='width: 100px;'>Active</label>"; }
											else{ echo "<label class='btn btn-primary' 
											style='width: 100px;'>Not Active</label>"; } ?>
                            <a class="btn btn-warning" href=""><i class="fa fa-times"></i>
							&nbsp;Remove</a>
    
                           </td></tr>     
						
		                         <?php
				           }//end while loop
								
                             }//end function Members

function fetch_total_users($link){

   $query = mysqli_query($link, "SELECT COUNT(*) AS 
   total FROM users");
			  $row = mysqli_fetch_array($query);
			 echo $row["total"];}
function fetch_total_access($link){

   $query = mysqli_query($link, "SELECT COUNT(*) AS 
   total FROM log_in_activity");
			  $row = mysqli_fetch_array($query);
			 echo $row["total"];}

?>

