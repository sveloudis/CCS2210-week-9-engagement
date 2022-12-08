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
		
		// The following variable $sql actually holds all the create table commands. Notice the .= that exist from the Professor table and onwards.
		// The .= symbol concatenates a new string to an existing one.

		$sql = "CREATE TABLE House (
				houseid int,
				name char(20),
				primary key (houseid)
				);";

		$sql .= "CREATE TABLE Professor (
				profId int,
				fname char(15),
				lname char(20),
				houseid int,
				primary key (profId),
				foreign key (houseid) references House (houseid)
				);";

		$sql .= "CREATE TABLE Course (
				crscode char(3),
				title char(30),
				primary key (crscode)
				);";

		$sql .= "CREATE TABLE Student (
				studid int,
				fname char(15),
				lname char(20),
				gender char(2),
				houseid int,
				age int,
				primary key (studid),
				foreign key (houseid) references House (houseid)
				);";

		$sql .= "CREATE TABLE Teaching (
				teachId int,
				profid int,
				crscode char(3),
				semester char(12),
				primary key (teachId),
				foreign key (profid) references Professor (profid),
				foreign key (crscode) references Course (crscode)
			);";

		// You now have to execute the query held in the variable $sql. However, note that it is not a single query but multiple ones.
		// You have to find the correct command to execute multiple sql statements.
		// If the execution of the query is successful, display and appropriate message. If not display the error that was found.
		/* your code here*/

		// Close the db connection
		/* your code here*/
	?>
</body>
</html>