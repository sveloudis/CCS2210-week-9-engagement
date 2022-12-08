<html>
<body>

<H1>Web Programming - 23/11/2022</H1>

<H2>TASK 03 - 2</H2>
<B>Description:</B> The form below allows you to select one of the tables in the Hogwarts database. Upon submit, the file "insertDBrow.php" is called. Like the previous one. HOWEVER, ther is a catch. Your mission, should you choose to accept it, is to edit this file (003-2.php) in order to create a drop down menu for the field "Student House Name" which is automatically populated with the appropriate values (Gryffindor, Hufflepuff, Ravenclaw, Slytherin) from the database. You have 25 minutes for this task.
<BR><BR><BR>

<?php
	// Create connection to the Hogwarts DB
	// Check if the connection is OK
	// Execute a query to determine the names of the houses
	// Put the result set into an array
	// Close the db connection
?>

<B>EXAMPLE OF INSERTING A NEW STUDENT:</B><BR><BR>

<FORM method="POST" action="insertDBrow.php">
	Student id: <input type="text" name="studentid"><BR><BR>
	Student first name: <input type="text" name="studentfirstname"><BR><BR>
	Student last name: <input type="text" name="studentlastname"><BR><BR>
	Student Gender: <select name="studentgender">
						<option value="" selected>
						<option value="F">Female
						<option value="M">Male
					</select><BR><BR>
	Student Age:  <input type="text" name="studentage"><BR><BR>
	Student House Name:
	<select name="studenthouseid">
		<option value="" selected>
		<?php
			// iterate through the array in order to populate the 'options' of the drop down menu
		?>
				<option value="<?php /* echo the value of the house id here */ ?>"><?php /* echo the name of the house here */ ?></option>
		<?php 
			// You will also need a counter
			}
		?>
	</select><BR><BR>
					
	<input type="submit" name="submit" value="Submit"> 
</FORM>
<BR><BR>

</body>
</html>