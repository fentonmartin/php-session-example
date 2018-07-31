<?php
    session_start();

    // Check session
    if (!isset($_SESSION['luser'])) {
        echo "Please Login again";
        echo "<a href='http://localhost/php-session-example/login.php'>Click Here to Login</a>";
    }
    else {
        // Check time when home page starts
        $now = time();
        // Check session expiration
        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired! <a href='http://localhost/php-session-example/login.php'>Login here</a>";
        }
        else {
?>
            <html>
                Welcome
                <?php
                    echo $_SESSION['luser'];
                    echo "<a href='http://localhost/php-session-example/logout.php'>Log out</a>";
                ?>
            </html>
<?php
        }
    }
?>