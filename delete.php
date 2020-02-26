<?php include('server.php');
  $_GET['idno'];
?>
<?php

   if(isset($_GET['idno']))
     {
     $id = $_GET['idno'];
  
     $query= "DELETE FROM users WHERE id='$id'";
     $data= mysqli_query($db,$query);

    if($id){

      echo "<font color='green'>record deleted succesfully.<a href='index.php'> updated list here</a>";
      $_SESSION['delete'] = "Data Deleted";
      header('Location:index.php');
    }
    else{
      echo "<font color='red'>record not deleted.<a href='index.php'> updated list here</a>";
    }
    }
else
   { echo "<font color='blue'> Click on update button to save the changes";

}
  ?>
</body>
</html>















  
  
    
    
      
      