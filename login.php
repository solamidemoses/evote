<?php
    session_start("vote");
    
    
    include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8" />
  <title>eVote</title>
  <link rel="icon" href="favicon.jpg">
  </head>
  <body class="" style="background-image:url('evote3.jpg'); background-size:cover;">
  <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
#signup{
        position : absolute;
        top: 100px;
        right: 30%;
        width: 35%;
    }

input[type=submit] {
  width: 100%;
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 40px;
}
</style>
  <header>
  <h1 style="text-align:center; color:white;">Login</h1>
  </header>
   <?php
            if(isset($_POST['submit'])){
              $voterid = trim(stripslashes($_POST['voterid_id']));
              
              $sql1 = "Select * from user where `voterid` = '$voterid' ";
              $query = mysql_query($sql1) or die(mysql_error());
              $result = mysql_fetch_array($query);
              $count = mysql_num_rows($query);
              if ($count == 1) {
                  $_SESSION['voterid'] = $result['voterid'];
                  if (isset($_SESSION['voterid'])) {
                      // header("location:index.php");
                      echo("<script>location.href = 'main.php';</script>");
                  }
              }
              else {
                  $error = "<div class='alert alert-warning alert-block'>
                              <h4><i class='fa fa-bell-alt'></i>Oops!</h4>
                              <p>Wrong Voter's Id!!</p>
                            </div>";
                  echo $error;
              }
            }

        ?>
		 <div class="cards mdl-card mdl-shadow--4dp" id="signup">
		<form action="login.php" method="post">
		<div class="list-group-item">
              <input type="text" name="voterid_id" placeholder="Enter Voter's Id" class="form-control no-border" required>
            </div>
			<input type="submit" name="submit" >
		</form>
		</div>
		</body>
		</html>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		