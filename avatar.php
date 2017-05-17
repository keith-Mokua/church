 <?php
 $get_id = $_GET['id']; 
 include('db_con.php');
 include('session.php');
 
 
                            if (isset($_POST['change'])) {
                               

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
								
								mysqli_query($link,"update  members set location = '$location'  where user_id='".$get_id."' ")or die(mysqli_error());
								
								?>
 
								<script>
								window.location = "user_profile_edit.php<?php echo '?id='.$get_id; ?>";  
								</script>

                       <?php     }  ?>