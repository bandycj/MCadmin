<?php
try {
	/*** connect to SQLite database ***/
	$db = new PDO("sqlite:database.sdb");
	$db->exec("CREATE TABLE Users (Id INTEGER PRIMARY KEY, UserName TEXT, Password TEXT, Level INTEGER)");

} catch(PDOException $e) {
	echo $e->getMessage();
}
?>
