

<?php include('server.php');

if(empty($_SESSION['username'])){
  header('location:login.php');
}
if(isset($_SESSION['delete'])){
  echo $_SESSION['delete'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
  <title>Table with database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class ="header">
    <h2>Home page</h2> 
    </div>

   <div class="content">
    <?php if(isset($_SESSION['success'])):?>

      <div class="error success">
        <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
        ?>
      </h3>
        
      </div>
    <?php endif?>

    <?php if(isset($_SESSION["username"])):?>
    <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
    <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
     <?php endif?>
  </div>
  <br><br>


<table>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>email</th>
    <th colspan="2">options</th>
  </tr>


<?php include 'function.php'; ?>

<?php
  if($result-> num_rows > 0){
    while($row =$result-> fetch_assoc()){

      echo "<tr>
                <td>".$row["id"] ."</td>
                <td>".$row["username"] ."</td>
                <td>".$row["email"] ."</td>
                <td><a href='update.php?idno=$row[id]&un=$row[username]&em=$row[email]'>Edit</a></td>
                 <td><a href='delete.php?idno=$row[id]'>Delete</a></td>
            </tr>";
    }
    echo "</table>";
  }
  else{
    echo "0 result";
  }

  // $db-> close();


  ?>





</table>




</body>
</html>