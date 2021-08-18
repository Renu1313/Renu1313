<?php include 'database.php'; ?>

<?php

// create a variable
$empid=$_POST['empid'];
$fname=$_POST['user'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$DOB=$_POST['dob'];
$DOJ=$_POST['doj'];
$email=$_POST['mail'];
$add=$_POST['address'];

//Execute the query


    mysqli_query($connect,"update Employee set fname='$fname', lname='$lname', gender='$gender', DOB='$DOB', DOJ='$DOJ', email='$email', address='$add' where empid='$empid'");
				
	if(mysqli_affected_rows($connect) > 0){
//	echo "<p>Employee Updated</p>";
	 echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
} else {
	//echo "Employee NOT Updated<br />";
	echo "<script type='text/javascript'>alert('failed!')</script>";
	echo mysqli_error ($connect);
}

?>
