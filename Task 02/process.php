<html>
<body>

<?php
	// Extract the value for the radio button that was clicked and place it into the variable $tableName
	$tableName = /* your code here */;

	// Give the appropriate values to the following four parameters which are required to make a connection to the Hogwarts DB.
	$servername = /* enter the value */;
	$username =  /* enter the value */;
	$password =  /* enter the value */;
	$dbname =  /* enter the value */;

	// Use the above four variables and the mysqli_connect function to create a connection to the Hogwarts database. 
	$conn = /* create the connection here */;

		// The following if-else checks if a connection to the Hogwarts DB was succesfull and displays the appropriate message.
	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);
	else
		echo "Connected to Hogwarts database!<BR><BR>";

	// The following is just an output message to display which table was selected.
	echo "You selected table: " . $tableName . "<BR><BR>";

	// Create the appropriate sql query to extract all rows from the table held in variable $tableName.
	$sql = /* your code */;

	// Execute the query held at $sql by using either mysqli_query (procedural approach) or $conn->query (OO approach).
	// The query should return a result which you must name $result.
	/* Your code here */

	// If there is a result 
	/* Your code */
	{
		// Determine how many rows were returned into $result. Store the number of rows into a variables called $numofrows.
		/* your code */

		// This message simply returns the number of rows"
		echo "Num of rows: " . $numofrows . "<BR><BR>";

		// Use the mysqli_fetch_assoc function to extract a row from the $result. You must do this in a loop e.g. while there is a row.
		// Within the loop use conditions (ifs) to determine the value of the table selected in the radio button (stored in $tableName)
		// and accordingly extract the respective columns from the result set and echo them to the screen.
		// No need for fancy output.

		/*
			your code here
		*/
	}
	// Otherwise display the message below
		echo "no rows were found.";

	// Close the db connection
	/* Your code */
?>
</body>
</html>