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

	$sql = "insert into House values (1, 'Gryffindor');";
	$sql .= "insert into House values (2, 'Hufflepuff');";
	$sql .= "insert into House values (3, 'Ravenclaw');";
	$sql .= "insert into House values (4, 'Slytherin');";
	$sql .= "insert into Professor values (10, 'Albus', 'Dumbledore', 1);";
	$sql .= "insert into Professor values (11, 'Severus', 'Snape', 4);";
	$sql .= "insert into Professor values (12, 'Rubeus', 'Hagrid', 1);";
	$sql .= "insert into Professor values (13, 'Gilderoy', 'Lockhart', 1);";
	$sql .= "insert into Professor values (14, 'Remus', 'Lupin', 1);";
	$sql .= "insert into Professor values (15, 'Minerva', 'McGonagall', 1);";
	$sql .= "insert into Professor values (16, 'Alastor', 'Moody', 2);";
	$sql .= "insert into Professor values (17, 'Quirinus', 'Quirrell', 3);";
	$sql .= "insert into Professor values (18, 'Horace', 'Slughorn', 4);";
	$sql .= "insert into Professor values (19, 'Sybill', 'Trelawney', 3);";
	$sql .= "insert into Professor values (20, 'Rolanda', 'Hooch', 2);";
	$sql .= "insert into Professor values (21, 'Filius ', 'Flitwick', 3);";
	$sql .= "insert into Course values ('HOM', 'History of Magic');";
	$sql .= "insert into Course values ('MUS', 'Muggle Studies');";
	$sql .= "insert into Course values ('TRA', 'Transfiguration');";
	$sql .= "insert into Course values ('DIV', 'Divination');";
	$sql .= "insert into Course values ('CHA', 'Charms');";
	$sql .= "insert into Course values ('CMC', 'Care of Magical Creatures');";
	$sql .= "insert into Course values ('GKE', 'Grounds Keeper');";
	$sql .= "insert into Course values ('FLY', 'Flying');";
	$sql .= "insert into Course values ('DAD', 'Defence Against the Dark Arts');";
	$sql .= "insert into Course values ('AST', 'Astronomy');";
	$sql .= "insert into Course values ('POT', 'Potions');";
	$sql .= "insert into Course values ('HER', 'Herbology');";
	$sql .= "insert into Course values ('ARI', 'Arithmancy');";
	$sql .= "insert into Student values (1001, 'Harry', 'Potter', 'M', 1, 12);";
	$sql .= "insert into Student values (1002, 'Ron', 'Weasley', 'M', 1, 13);";
	$sql .= "insert into Student values (1003, 'Hermione', 'Granger', 'F', 1, 14);";
	$sql .= "insert into Student values (1004, 'Lavender', 'Brown', 'M', 1, 14);";
	$sql .= "insert into Student values (1005, 'Cedric', 'Diggory', 'M', 2, 13);";
	$sql .= "insert into Student values (1006, 'Zacharias', 'Smith', 'M', 2, 10);";
	$sql .= "insert into Student values (1007, 'Ernie', 'Macmillan', 'M', 2, 12);";
	$sql .= "insert into Student values (1008, 'Susan', 'Bones', 'F', 2, 13);";
	$sql .= "insert into Student values (1009, 'Marietta', 'Edgecombe', 'F', 3, 12);";
	$sql .= "insert into Student values (1010, 'Michael', 'Corner', 'M', 3, 12);";
	$sql .= "insert into Student values (1011, 'Terry', 'Boot', 'M', 3, 14);";
	$sql .= "insert into Student values (1012, 'Cho', 'Chang', 'F', 3, 13);";
	$sql .= "insert into Student values (1013, 'Draco', 'Malfoy', 'M', 4, 14);";
	$sql .= "insert into Student values (1014, 'Pansy', 'Parkinson', 'F', 4, 13);";
	$sql .= "insert into Student values (1015, 'Gregory', 'Goyle', 'M', 4, 15);";
	$sql .= "insert into Student values (1016, 'Marcus', 'Flint', 'M', 4, 14);";
	$sql .= "insert into Teaching values (810, 21, 'CHA', 'Fall2019');";
	$sql .= "insert into Teaching values (811, 21, 'FLY', 'Fall2019');";
	$sql .= "insert into Teaching values (812, 21, 'DIV', 'Fall2019');";
	$sql .= "insert into Teaching values (813, 11, 'DAD', 'Fall2019');";
	$sql .= "insert into Teaching values (814, 17, 'DAD', 'Fall2019');";
	$sql .= "insert into Teaching values (815, 12, 'CMC', 'Fall2019');";
	$sql .= "insert into Teaching values (816, 15, 'TRA', 'Fall2019');";
	$sql .= "insert into Teaching values (817, 13, 'DAD', 'Fall2019');";
	$sql .= "insert into Teaching values (818, 18, 'POT', 'Spring2020');";
	$sql .= "insert into Teaching values (819, 18, 'CHA', 'Spring2020');";
	$sql .= "insert into Teaching values (820, 18, 'FLY', 'Spring2020');";
	$sql .= "insert into Teaching values (821, 14, 'DAD', 'Spring2020');";
	$sql .= "insert into Teaching values (822, 12, 'CMC', 'Spring2020');";
	$sql .= "insert into Teaching values (823, 11, 'DAD', 'Spring2020');";
	$sql .= "insert into Teaching values (824, 15, 'TRA', 'Summer2020');";
	$sql .= "insert into Teaching values (825, 16, 'DAD', 'Summer2020');";

	// You now have to execute the query held in the variable $sql. Again, note that it is not a single query but multiple ones.
	// You have to use the correct command to execute multiple sql statements.
	// If the execution of the query is successful, display and appropriate message. If not display the error that was found.
	/* your code here*/

	// Close the db connection
	/* your code here*/
?> 
</body>
</html>