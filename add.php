<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sec = $_POST['sec'];
		
	// checking empty fields
	if(empty($fname) || empty($fname) || empty($sec)) {
				
		if(empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($fname)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($sec)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database		
		$sql = "INSERT INTO users(fname, lname, sec) VALUES(:fname, :lname, :sec)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':fname', $fname);
		$query->bindparam(':lname', $lname);
		$query->bindparam(':sec', $sec);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='table.php'>View Result</a>";
	}
}
?>
</body>
</html>