<?php
// db.inc.php database connection include file;
try
{
	// Try to connect;
	$pdo = new PDO('mysql:host=localhost; dbname=test_project', 'root', 'breakpoint1234');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
	$testConn = ("Connection Established");
	$testConn1 = (string)$testConn;
	echo $testConn1;
}
catch(PDOException $e)
{
	// Problem connecting, display error and exit;
	$error = 'Unable to connect to the database server <!--' . $e->getMessage() . '--> '; 
	// The above a PDO exception object. This brings back the full error message from the database, but hides with comment; 
	
	include 'error.html.php';
	exit();
}
?>