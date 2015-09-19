<!DOCTYPE html>
<?php
include('nav.php');
include('session.php');
   if(isset($_SESSION['login_user'])){
   header("location: index.php");
   }
?>
<html lang="en-US">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js">
  </script>
  <head>
	<title>Login page</title>
	<link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
	<div id="main">
	  <div id ="login">
		<h2> Login Form</h2>
		<form action="" method="post">
		  <label>UserName: </label>
		  <input id="name" name="username" placeholder="username" type="text">
		  <label>Password: </label>
		  <input id="password" name="password" placeholder="********" type="password">
		  <input name="submit" type="submit" value=" Login ">
		  <p id="error"></p>
		  </form>
	  </div>
	</div>
  </body>
</html>
