<?php
include("config.php");
 if(isset($_POST['username'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT password from member WHERE username = '$username'";
   $query_run = mysql_query($sql);
      $query_num_row = mysql_num_rows($query_run);
        if($query_num_row == 0) {
         echo "<p class = 'invalid'>You entered unknown username..</p>";
   }
   else if($query_num_row == 1) {
      //$mem_id = mysql_result($query_run,0,'mem_id');
          while ($data=mysql_fetch_array($query_run)){
             echo 'Your password is: ' . $data['password']. " " . '<a href ="index.php">Back to login form.</a>';

          }
   }
 }
?>


<form action = "#" method="post">
  Enter Your Username: <input type ="text" name ="username">
  <input type ="password" name = "password" hidden readonly="true">
  <input type ="submit" name = "submit">
</form>
