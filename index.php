<?php
require('JSONAPI.php'); // get this file at: https://github.com/alecgorge/jsonapi/raw/master/sdk/php/JSONAPI.php

$api = new JSONAPI("localhost", 31337, "minecraft", "blargity", "ohnoez");

echo var_dump($api->call("getPlayerLimit"));
echo "test";

?>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="index.js" type="text/javascript"></script>
    <link rel=StyleSheet href="style.css" type="text/css"></link>
</head>
<body>
    <?php session_start(); ?>
    <div id="profile">
        <?php if(isset($_SESSION['user_name'])){?>
            <a href='logout.php' id='logout'>Logout</a>
        <?php }else {?>
        <a id="login_a" href="#">login</a>
        <a id="register_a" href="#">register</a>
        <?php } ?>
    </div>
    <div id="login_form">
        <div class="err" id="add_err"></div>
        <form action="model/login.php">
            <label>User Name:</label>
            <input type="text" id="user_name" name="user_name" />
            <label>Password:</label>
            <input type="password" id="password" name="password" />
            <label></label><br/>
            <input type="submit" id="login" value="Login" />
            <input type="button" id="cancel_hide" value="Cancel" />
        </form>
    </div>
    <div id="register_form">
        <div class="err" id="add_err"></div>
        <form action="model/register.php">
            <label>User Name:</label>
            <input type="text" id="user_name" name="user_name" />
            <label>Password:</label>
            <input type="password" id="password" name="password" />
            <label></label><br/>
            <input type="submit" id="register" value="Register" />
            <input type="button" id="cancel_hide" value="Cancel" />
        </form>
    </div>

    <div id="shadow" class="popup"></div>
</body>
