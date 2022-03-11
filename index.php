<?php
include("header.php");
header("Access-Control-Allow-Origin: *");
?>
<div id="box2">
<center><h1 style="color: #ffffff; font-family:verdana">Panel</h1></center> 

<div id="box">

	<center><h1 style="color: #ffffff; font-family:verdana">Captcha</h1></center> 
	<script type="text/javascript" src="js/captcha.js"></script> 
	<br>
	<center><input type="text" id="adanax" type="text" value=""placeholder="Captcha" maxlength="7"></center>
    <br>
    <br>
	<center><button onclick="check();" class="button">Sign</button></center>
</div>
</div>
