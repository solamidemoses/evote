<?php include "connection.php"; ?>
<?php
	$voterid = $_SESSION['voterid'];

  	
			    	$query30 = "INSERT INTO meals_bought (voterid)
			        VALUES ('$voterid')";
			        $result30 = mysql_query($query30) or die ("Couldn't execute query30");

			        

				    // header("Location: receipt.php?receipt=$receipt&&meal='mealid123$receipt'");
				    // redirect_to("receipt.php?receipt=$receipt&&meal='mealid123$receipt'");
        			echo("<script>location.href = 'receipt.php?receipt=$receipt&&meal=mealid123$receipt';</script>");

				

	    
    	
     
?>