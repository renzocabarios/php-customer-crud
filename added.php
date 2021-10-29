<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$title = mysqli_real_escape_string($mysqli, $_POST['title']);
	$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
	$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$town = mysqli_real_escape_string($mysqli, $_POST['town']);
	$zip = mysqli_real_escape_string($mysqli, $_POST['zip']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);

	if(empty($title) || empty($fname) || empty($lname) || empty($address) || empty($town) || empty($zip) || empty($phone)) {
				
		if(empty($title)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($fname)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
        if(empty($address)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($town)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($zip)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
        if(empty($phone)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 

		$result = mysqli_query($mysqli, "INSERT INTO customers(title,fname,lname, address, town, zip, phone) VALUES('$title','$fname','$lname','$address','$town','$zip','$phone')");
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>