<?php 





?>

<!DOCTYPE html>
<html>
<head>
<title>riva systemss</title>
</head>
<body>
<style>
	body {
		background-color: transparent;
	}
#box{
	z-index:1;
	position: relative;
	margin: auto;
	top : -60px;
	width: 750px;
    height:300px;
	-webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px 5px 5px 5px;
    background-color:#000;
}


#box2{
	z-index:2;
	position: relative;
	margin: auto;
	top : 200px;
	width: 750px;
    height:500px;
	-webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px 5px 5px 5px;
    background-color:#000;
}

button:hover {
	transform: scale(0.54);
  transform: translateY(20px) scale(1.15);
  transform-origin: 50% bottom;
  transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
  transform: translateY(0) scale(1.2);
}

input[type=text] {
	text-align: center;
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px 5px 5px 5px;
	border: 2px solid #83d7d6;
  border-radius: 4px;
}

input[type=number] {
	text-align: center;
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px 5px 5px 5px;
	border: 2px solid #83d7d6;
  border-radius: 4px;
}

input[type=text]:hover {
	background-color: white;
	border: 2px solid red;
  border-radius: 4px;
  transform: scale(0.54);
  transform: translateY(20px) scale(1.15);
  transform-origin: 50% bottom;
  transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
  transform: translateY(0) scale(1.2);
}

.button {
	-webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px 5px 5px 5px;
  background-color: #83d7d6;
  border: none;
  color: #000;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  font-family:verdana
}

@font-face {

font-family: LeagueGothic

src: url(LeagueGothic-Regular.woff2);
}

	</style>



</body>
</html>