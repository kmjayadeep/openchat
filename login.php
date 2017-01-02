<?php
session_start();
if(isset($_SESSION['start']))
{
    header("Location: account.php");
}
?>
<!Doctype html>
<html>
	<head>
		<title>OpenChat || Login</title>
        <link rel="stylesheet" href="css/main.css">
	</head>
	<body>

        <div class="header">
            <a id="brand" href="">OpenChat</a>
            <ul class="nav-right">
                <li><a href="index.php">About</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </div>

        <div class="main">
            <h1>Login</h1>
            <hr><br>
            <label id="login_label">Email or Username</label>
            <input type="text" name="login" id="login" placeholder="Email or Username" > <br>
            <label id="pass_label">Password</label>
            <input type="password" name="passLogin" id="passLogin">
            <button name="submit" onclick="login_check()" value="Login">Login</button>
        </div>

        <script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="js/login_validate.js"></script>
        <script type="text/javascript" src="node_modules/place-holder.js/place-holder.min.js"></script>
        <script>
            $("input").keypress(function(e) {
                if(e.keyCode == 13) {
                    $("button").click();
                }
            });
        </script>
    </body>

</html>