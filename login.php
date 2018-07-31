<?php
    // Start session
    session_start();
?>

<html>
	<body>
		<form method="post">
	        Username
	        <input type="text" name="text">
		</br></br>
	        Password
	        <input type="password" name="pwd">
		</br></br>
			<input type="submit" value="Sign In" name="submit">
		</form>
	</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        // Set user and password
        $v1 = "1";
        $v2 = "1";
        // Get inputed user and password
        $v3 = $_POST['text'];
        $v4 = $_POST['pwd'];
        // Verifiy user and password
        if ($v1 == $v3 && $v2 == $v4) {
            $_SESSION['luser'] = $v1;
            // Get current time session
            $_SESSION['start'] = time();
            // Set session expiration time (minute * second)
            $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
            // Start homepage
            header('Location: http://localhost/php-session-example/homepage.php');
        } else {
            // Wrong user or password
            echo "Please enter the username or password again!";
        }
    }
?>