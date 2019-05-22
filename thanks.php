<!DOCTYPE html>
<html>
<head>
<title>eVote</title>
 <link rel="icon" href="favicon.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("evote3.jpg");
  background-color: #cccccc;
  height: 680px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}
</style>
<style>
.button {
  background-color: purple; /* Green */
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
</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Thanks!</h1>
    <h3>Electronic Voting Portal</h3>
	<form action = "logout.php">
    <button class="button button3" type="submit">Logout</button>
	</form>
	
  </div>
</div>



</body>
<footer>Proudly developed by Salako Moses</footer>
</html>
