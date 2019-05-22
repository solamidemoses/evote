<?php

include 'connection.php';

if (isset($_POST['submit']))
{
 $chkbox = $_POST['check'];
 
 $i = 0;
 
 While($i<sizeof($chkbox))
 {
 
 $query = "INSERT INTO contestant (result) VALUES ('".$chkbox[$i]."')";
 
 mysql_query($query) or die(mysql_error());
 
 $i++;
 }
 echo "Successfully Submitted.";
 
 header('Location: sec.php');
 }

?>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8" />
  <title>eVote Dashboard</title>
  <link rel="icon" href="favicon.jpg">
  <link rel="icon" href="img/favicon.png">
        <link href="mdl/material.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/jquery-ui.min.css.css" rel="stylesheet">
		<link href="css/font.css" rel="stylesheet">
        <link href="css/alphago.css" rel="stylesheet">
		<link rel="stylesheet" href="css/check">
		<h2 style="text-align:center; color:black;">Welcome Voters!</h2>
		<style>
    #desc{
        top: 100px;
        height: 400px;
        position : absolute;
        left: 9%;
        width: 22%;
        opacity: 0.9;
    }
	#desc1{
        top: 100px;
        height: 400px;
        position : relative;
        left: 39%;
        width: 22%;
        opacity: 0.9;
    }
	#desc2{
        top: 100px;
        height: 400px;
        position : absolute;
        left: 69%;
        width: 22%;
        opacity: 0.9;
    }
.button {
  background-color: black; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {width: 250px;}
.button2 {width: 50%;}
.button3 {width: 100%;}

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

	
	</style>
</head>

<body class="" style="background-image:url('evote4.jpg'); background-size:cover;">
 


 <div class="cards mdl-card mdl-shadow--4dp" id="desc">
        <h4 class="title"><b>V-President Candidate1</b></h4>
        <hr>
		
        <img src = "avatar.png" width ="270px" height="170px" > 
		<hr>
		<form action = "main.php" method ="post">
		<span class="button-checkbox">
        <button type="button" class="btn" data-color="primary">V-Presidential Candidate1</button>
        <input type="checkbox"  name ="check[]" value ="Candidate1" class="hidden"/>
    </span>
			 <input type="submit" name="submit" Value="Confirm and Proceed">
			
			</form>
			
           <!--<span class="button-checkbox">
        <button type="button" class="btn" data-color="primary">Unchecked</button>
        <input type="checkbox" class="hidden" />
    </span>
		   -->
    </div>
	 <div class="cards mdl-card mdl-shadow--4dp" id="desc1">
        <h4 class="title"><b>V-President Candidate2</b></h4>
        <hr>
		
        <img src = "avatar.png" width ="270px" height="170px" > 
		<hr>
		<form action = "main.php" method ="post">
				<span class="button-checkbox">
        <button type="button" class="btn" data-color="primary">V-Presidential Candidate2</button>
        <input type="checkbox"  name ="check[]" value ="Candidate2" class="hidden"/>
    </span>
			 <input type="submit" name="submit" Value="Confirm and Proceed">
			
			</form>
			
           
    </div>
	<div class="cards mdl-card mdl-shadow--4dp" id="desc2">
        <h4 class="title"><b>V-President Candidate3</b></h4>
        <hr>
		
        <img src = "avatar.png" width ="270px" height="170px" > 
		<hr>
		<form action = "main.php" method ="post">
		<span class="button-checkbox">
        <button type="button" class="btn" data-color="primary">V-Presidential Candidate3</button>
        <input type="checkbox"  name ="check[]" value ="Candidate3" class="hidden"/>
    </span>
			 <input type="submit" name="submit" Value="Confirm and Proceed">
			</form>

    </div>
	<br>
	 <br>
	    <br>
	        <br>
	             <br>
				 <div>
	<form action = "fin.php">
		 <button class="button button3" type="submit">Proceed</button>
			
			</form>
			</div>
				 <script>
	$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});


</script>

</body>
</html>