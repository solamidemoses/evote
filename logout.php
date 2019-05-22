<?php
session_start('vote');
if(session_destroy())
{
	// header("Location:login.php");
	echo("<script>location.href = 'login.php';</script>");
	// redirect_to("login.php");
}
?>