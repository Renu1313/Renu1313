<?php include 'database.php'; ?>

<?php

// create a variable
$name=$_POST['username'];
$pass=$_POST['password'];
//Execute the query


    mysqli_query($connect,"INSERT INTO users (USERNAME, PASSWORD) VALUES ('$name','$pass')");
	if(mysqli_affected_rows($connect) > 0){
		echo "<script type='text/javascript'>alert('Registered successfully!')</script>";
} else {

        echo "<script type='text/javascript'>alert('failed!')</script>";
	echo mysqli_error ($connect);
}

?>
