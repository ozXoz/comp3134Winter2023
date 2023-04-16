<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Benjamin Sarras">
    <title>LABwk12</title>
</head>
<body>
    <?php
    session_start();

    // Set a session variable named 'confirmation'
    $_SESSION['confirmation'] = '123abc';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmation = $_POST['confirmation'];

        if ($username == 'host' && $password == 'pass' && $_SESSION['confirmation'] == $confirmation) {
            echo '<div id="splash-message">Success: You have entered the correct credentials!</div>';
        } else {
            echo '<div id="splash-message">Failure: Invalid credentials entered.</div>';
        }
    }
    ?>

    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br/>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br/>
        <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>