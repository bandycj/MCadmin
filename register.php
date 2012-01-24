<?php
require('JSONAPI.php'); // get this file at: https://github.com/alecgorge/jsonapi/raw/master/sdk/php/JSONAPI.php

$api = new JSONAPI("localhost", 31337, "minecraft", "blargity", "ohnoez");

echo var_dump($api->call("getPlayerLimit"));
echo "test";

?>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
	    $("#login_a").click(function(){
	            $("#shadow").fadeIn("normal");
	            $("#login_form").fadeIn("normal");
	            $("#user_name").focus();
	        });
	    $("#cancel_hide").click(function(){
		    $("#login_form").fadeOut("normal");
		    $("#shadow").fadeOut();
	    });
	    $("#register").click(fuction(){
		    username=$("#user_name").val();
		    password=$("#password").val();
		    $.ajax({
			type: "POST",
			url: "register.php",
			data: "name="+username+"&pwd="+password
			success: function(html){
				if(html=='true'){
					$("#login_form").fadeOut("normal");
					$("#shadow").fadeOut();
				} else {
					$("#add_err").html("Could not register user name.");
				}
			},
			beforeSend:function(){
				$("#add_err").html("Loading...");
			}
		    });
	    });
});
</script>


</head>
<body>
    <?php session_start(); ?>
    <div id="profile">
        <?php if(isset($_SESSION['user_name'])){?>
            <a href='logout.php' id='logout'>Logout</a>
        <?php }else {?>
            <a id="login_a" href="#">login</a>
        <?php } ?>
    </div>
    <div id="login_form">
	    <div class="err" id="add_err"></div>
	    <form action="model/create.php">
	        <label>User Name:</label>
        	<input type="text" id="user_name" name="user_name" />
	        <label>Password:</label>
	        <input type="password" id="password" name="password" />
	        <label></label><br/>
		<input type="submit" id="login" value="Login" />
		<input type="submit" id="register" value="Register" />
	        <input type="button" id="cancel_hide" value="Cancel" />
	    </form>
    </div>
    <div id="shadow" class="popup"></div>
</body>
