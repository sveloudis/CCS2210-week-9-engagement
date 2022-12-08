<html>
<body>
	<?php
		// Give the appropriate values to the following four parameters which are required to make a connection to the Hogwarts DB.
		$servername = /* enter the value */;
		$username =  /* enter the value */;
		$password =  /* enter the value */;
		$dbname =  /* enter the value */;

		// Use the above four variables to create a new mysqli connection to the Hogwarts database
		$conn = /* create the connection here */;		

		// The following if-else checks if a connection to the Hogwarts DB was succesfull and displays the appropriate message.
		if ($conn->connect_error)
			die("Connection failed: " . $conn->connect_error);
		else
			echo "Connected to Hogwarts database!<BR>";

		$sql = "drop table Teaching;";
		$sql .= "drop table Professor;";
		$sql .= "drop table Course;";		
		$sql .= "drop table Student;";
		$sql .= "drop table House;";

		// Execute the queries held in the variable $sql. You should use the command that executes multiple sql statements at once.
		// If the execution of the query is successful, display and appropriate message. If not display the error that was found.
		/* your code here*/

		// Close the db connection
		/* your code here*/
	?>
</body>
</html>