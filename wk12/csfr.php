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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'host' && $password == 'pass') {
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
        <input type="submit" value="Submit">
    </form>
</body>
</html>