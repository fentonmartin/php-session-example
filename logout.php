<?php
	// Destroy session
    session_start();
    session_destroy();
    // Back to login
    header('Location: http://localhost/php-session-example/login.php');
?>