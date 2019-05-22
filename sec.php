<html>
<head>
<meta charset="utf-8" />
  <title>eVote Dashboard</title>
  <link rel="icon" href="favicon.jpg">
  <link rel="icon" href="img/favicon.png">
        <link href="mdl/material.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/jquery-ui.min.css.css" rel="stylesheet">
		<link href="css/font.css" rel="stylesheet">
        <link href="css/alphago.css" rel="stylesheet">
		<h2 style="text-align:center; color:black;">Welcome Voters!</h2>
		<style>
    #desc{
        top: 100px;
        height: 360px;
        position : absolute;
        left: 9%;
        width: 22%;
        opacity: 0.9;
    }
	#desc1{
        top: 100px;
        height: 360px;
        position : relative;
        left: 39%;
        width: 22%;
        opacity: 0.9;
    }
	#desc2{
        top: 100px;
        height: 360px;
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
        <h4 class="title"><b>Gen. Sec Candidate1</b></h4>
        <hr>
		
        <img src = "avatar.png" width ="270px" height="170px" > 
		<hr>
		<form action = "">
		<input type="submit" name="submit "value="Validate"> 
			
			</form>
			
           
    </div>
	 <div class="cards mdl-card mdl-shadow--4dp" id="desc1">
        <h4 class="title"><b>Gen. Sec Candidate2</b></h4>
        <hr>
		
        <img src = "avatar.png" width ="270px" height="170px" > 
		<hr>
		<form action = "">
		<input type="submit" name="submit "value="Validate"> 
			
			</form>
			
           
    </div>
	<div class="cards mdl-card mdl-shadow--4dp" id="desc2">
        <h4 class="title"><b>Gen. Sec Candidate3</b></h4>
        <hr>
		
        <img src = "avatar.png" width ="270px" height="170px" > 
		<hr>
		<form action = "">
		<input type="submit" name="submit "value="Validate"> 
			
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
	





</body>
</html>