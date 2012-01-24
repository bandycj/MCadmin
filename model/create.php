<?php
try {
	$username = $_POST['name'];
	$password = md5($_POST['pwd']);
	$level = $_SESSION['level'];
	if (!defined($level)){
		$level = 0;
	}
	$db = new PDO('sqlite:database.sdb');
	$db->exec("INSERT INTO Users (UserName,Level) VALUES ('$username','$level');");
} catch (PDOException $e){
	print 'Exception : '.$e->getMessage();
}
?>
