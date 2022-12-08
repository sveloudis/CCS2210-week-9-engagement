<html>
<body>

<H1>Web Programming - 23/11/2022</H1>

<H2>TASK 02</H2>
<B>Description:</B> The form below allows you to select one of the tables in the Hogwarts database. Upon submit, the file "process.php" is called. Your mission, should you choose to accept it, is to edit the "process.php" so that it determines a) which radio button was pressed, b) query the table indicated by the radio button, and c) display all data in that specific table. You have 30 minutes for this task.
<BR><BR><BR>

<FORM method="POST" action="process.php">
	Which table's data do you want to see?<BR>
     <input type="radio" name="tb2see" value="house">House<BR>
     <input type="radio" name="tb2see" value="professor">Professor<BR>
     <input type="radio" name="tb2see" value="course">Course<BR>
     <input type="radio" name="tb2see" value="student">Student<BR>
     <input type="radio" name="tb2see" value="teaching">Teaching<BR><BR>
	<input type = "submit" name = "submit" value = "Submit"> 
	</FORM>
<BR><BR>

</body>
</html>

