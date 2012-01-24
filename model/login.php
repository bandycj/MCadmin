<?php
    session_start();
    $username = $_POST['name'];
    $password = md5($_POST['pwd']);
    
    $db = new PDO('sqlite:database.sdb');
    $stmt = $dbh->prepare('SELECT DISTINCT UserName FROM Users WHERE UserName = :username AND Password = :password');
    $result = $stmt->execute( array(
	    ':username' => $username, 
	    ':password' => $password) 
    );

    if ($db->rowCount() > 1){
	    echo 'true';
	    $_SESSION['user_name']=$row['UserName'];
	    $_SESSION['level']=$row['Level'];
    } else {
	    echo 'false';
    }
?>


