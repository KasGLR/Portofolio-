<!DOCTYPE html>

<html>

 

<head>

<meta http-equiv="refresh" content="0;url=https://89986.stu.sd-lab.nl/portofolio/vakken/contact.html" />

	<title>Insert Page page</title>

</head>

 

<body>

		<?php

 

 
 		$servername = "localhost";
		$username = "portfolio_user";
		$password = "x2zZBvG%4p";
		$db_name = "pf_db";   
 

try {

	$conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);

	// Set the PDO error mode to exception

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo "Connected successfully";

} catch (PDOException $e) {

	echo "Connection failed: " . $e->getMessage();

}

 

// Check if the form has been submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Taking all 5 values from the form data(input)

	$first_name = $_POST['first_name'];


	$email = $_POST['email'];

	

	$message = $_POST['message'];

 

	try {

		// Prepare the SQL statement to insert data

		$stmt = $conn->prepare("INSERT INTO Email_Info (first_name, email, message)

			VALUES (:first_name, :email, :message)");

 

		// Bind parameters to prepared statement

		$stmt->bindParam(':first_name', $first_name);

	

		$stmt->bindParam(':email', $email);

	

		$stmt->bindParam(':message', $message);

 

		// Execute the statement

		$stmt->execute();

 

		echo "<h3>Data stored in the database successfully.</h3>";

	} catch (PDOException $e) {

		echo "Error: " . $e->getMessage();

	}

}

 

		// Close connection

		mysqli_close($conn);

		?>

	

</body>

 

</html>