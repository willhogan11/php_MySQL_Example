<?php
// Controller Page
include $_SERVER['DOCUMENT_ROOT'] . 'phpbook/testProject/db.inc.php';
include 'form.html.php';

// When button is clicked, retrieves a total list of Doctors from the Database 
// and displays to the user on screen
if(isset($_GET['button1'])){
	try{
		$sql = "SELECT * FROM DOCTOR";	
		$result = $pdo->query($sql);
		
		echo "List of Doctors in this Database</br></br>";
		foreach($result as $row)
			echo "<li>{$row['TITLE']} 
					  {$row['FNAME']}
					  {$row['LNAME']}, 
					  {$row['SPEC_IN']}
				  </li>";
	}
	catch(PDOException $e){
		$error = 'Error getting Database List'; 
		include 'error.html.php';
		exit();
	}
}
// End if(isset($_GET['button1']))
?>