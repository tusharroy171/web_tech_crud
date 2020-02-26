<?php include('server.php');
  $_GET['idno'];
  $_GET['un'];
  $_GET['em'];

?>
<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>For Update</h2>
  </div>
  
  <form method="POST" action="">
    
    <input type="hidden" name="id" value="<?php echo $_GET['idno']; ?>">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $_GET['un']; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
     <input type="email" name="email" value="<?php echo $_GET['em']; ?>">
    </div>
    <div>
     <input type="submit" name="submit" value="Update"/>
    </div>
    
  </form>
  <?php

   if(isset($_POST['submit']))
     {
      $id = $_POST['id'];
      $username = $_POST['username'];
      $email = $_POST['email'];

      
     $query= "UPDATE users SET username='$username', email='$email' WHERE id='$id'";
     $data= mysqli_query($db,$query);


    if($data){

      echo "<font color='green'>record updated succesfully.<a href='index.php'> updated list here</a>";
      
    }
    else{
      echo "<font color='red'>record not updated.<a href='index.php'> updated list here</a>";
    }
    }
else
   { echo "<font color='blue'> Click on update button to save the changes";

}
  ?>
</body>
</html>















  
  
    
    
      
      