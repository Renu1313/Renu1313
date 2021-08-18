<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
body {
          background-image: url("Updates.png");
          background-color: #cccccc;
          background-size: 100% 100%;
          background-repeat: no-repeat;

         }

</style>
</head>
<body>
<div id="page">
	<h2>Update Employee Details</h2>
&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
<?php

function home_url(){
    ?><a href="http://127.0.0.1/teamb/home.php" style="font-size:28px"><b> Go Home</b></a><?php
}
home_url();
?>

	<div class="login-form">
		<form action="updateemp.php" method="post">
				<label for="fname">empid*</label>
				<input type="text" name="empid" id="empid" placeholder="ex:1" required><br><br>
				<label for="fname">fname*</label>
				<input type="text" name="user" id="username" placeholder="ex:john" required><br><br>
				<label for="lname">lname*</label>
				<input type="text" name="lname" id="lname" placeholder="ex:paul" required><br><br>
<!--			<select name="organis" required>
				<option value=""></option>
				<option value="a">yes co</option>
				<option value="b">no ko</option>
				<option value="c">boom</option>
				<option value="d">jazz</option>
			</select><br><br>-->
			<label for="name">gender*</label>
				<input type="radio" name="gender" value="male" required="required" unchecked > Male
				<input type="radio" name="gender" value="female" required="required"> Female<br><br>
				<label for="name">Date of birth*</label>
				<input type="date" name="dob" value="dob" required><br><br>
				<label for="name">Date of joining*</label>
				<input type="date" name="doj" value="doj" required><br><br>
				<label for="lname">address*</label>
				<input type="text" name="address" id="address" placeholder="ex:xyz" required><br><br>
				<label for="name">E-mail*</label>
				<input type="email" name="mail" value="" placeholder="ex:xxx@x.com" required><br><br>
				<button type="submit">Update</button>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
						</form>
	</div>
</div>
</body>
</html>
