<?php

session_start();

// coding jika sudah masuk halaman index jangan ke halaman login
if (isset($_SESSION["login"]) ) {

	header("Location: index.php");
	exit;
}

require 'functions.php';

if (isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username= '$username'" );

	// cek username

	if (mysqli_num_rows($result) ===1 ) {

	// cek passsword
		$row = mysqli_fetch_assoc($result);

		if (password_verify ($password, $row["password"] ) )  {
			
	// sett session
			$_SESSION ["login"] = true ;

			header ("Location: index.php");
			exit;
		}

	}
		$error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            background-color: #584d64;
            }
            form {
                width:350px;
                background-color:#5b743a;
                padding: 30px;
                margin: auto;
                font-size:20px;
                color: white;
            }
            input[type=text] {
                width: 100%;
                padding:5px;
                font-size:18;
                border:none;
                border-radius:0 5px 0 0;
            }
            label {
            display:block;
        }

    </style>

</head>
<body>
    
<form action="" method="post"  >
        <center>Spare part warehouse cikande</center><BR>
		<?php if (isset ($error)): ?>

<p style="color:red; font-style: italic;"> username or password salah!! </p>

<?php endif; ?>

        <ul>
            <li>
                <label for="username"> username: </label>
                <input type="text" name="username" id="username" required>
            </li>
            <br>
            <li>
                <label for="password"> password: </label>
                <input type="password" name="password" id="password">
            </li>
            
            <br>
           
            <button type="submit"  name="login"> Login</button>
            <br><br>
			<!-- <a href="registrasi.php" style="text-decoration:none" >SIGNUP</a> -->
        </ul>
</body>
</html>