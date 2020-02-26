<?php
		
  $db = mysqli_connect('localhost', 'root', '', 'registration');
  if($db-> connect_error){
    die("Connection failed:" .$db-> connect_error);
  }
  $sql= "SELECT id, username, email from users";
  $result = $db-> query($sql);
  return $result;

?>