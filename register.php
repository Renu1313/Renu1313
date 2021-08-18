<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
body {
          background-image: url("user.png");
          background-color: #cccccc;
          background-size: 100% 100%;
          background-repeat: no-repeat;

         }

</style>
</head>

<body >
<div id="page">
	<h2><u><b> New Employee Registration</u> </b></h2>
<!--       <a href="allprocess.php"  style="font-size:32px" class="btn btn-success pull-right">View Users</a>-->
                                   &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
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
    ?><a href="http://127.0.0.1/teamb/home.php" style="font-size:32px"><b> Go Home</b></a><?php
}
home_url();
?>
	<div class="login-form">
                                   &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
                                   &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
		<form action="process.php" method="post">
				<b><label for="fname" style=font-size:24px>fname*</label></b>
				<input type="text" name="user" id="username" placeholder="ex:Amit" required><br><br>
				<b><label for="lname" style=font-size:24px>lname*</label></b>
				<input type="text" name="lname" id="lname" placeholder="ex:Saxena" required><br><br>
<!--			<select name="organis" required>
				<option value=""></option>
				<option value="a">yes co</option>
				<option value="b">no ko</option>
				<option value="c">boom</option>
				<option value="d">jazz</option>
			</select><br><br>-->
		<b>	<label for="name" style=font-size:24px>Gender*</label></b>
				<input type="radio" name="gender" value="male"  required="required" > Male 
				<input type="radio" name="gender" value="female" required="required"> Female<br><br>
				<b><label for="name" style=font-size:24px>Date of birth*</label></b>
				<input type="date" name="dob" value="dob" required><br><br>
				<b><label for="name" style=font-size:24px>Date of joining*</label></b>
				<input type="date" name="doj" value="doj" required><br><br>
				<b><label for="Address" style=font-size:24px>address*</label></n>
				<input type="text" name="address" id="address" placeholder="ex:Delhi" required><br><br>
				<b><label for="E-Mail" style=font-size:24px>E-mail*</label></b>
				<input type="email" name="mail" value="" placeholder="ex:abc@com" required><br><br>
				<button type="submit" style=font-size:24px>add</button>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
						</form>
	</div>
</div>
</body>
</html>
