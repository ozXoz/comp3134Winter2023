<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Benjamin Sarras">
    <title>LABwk12</title>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#csrf-form").submit();
        });
    </script>
</head>
<body>
    <?php
        session_start();

        // Create a PHP session variable called 'confirmation' and give it a random value.
        $_SESSION['confirmation'] = bin2hex(random_bytes(32));
    ?>

    <form method="post" action="csrf.php" id="csrf-form">
        <input type="hidden" name="username" value="host" />
        <input type="hidden" name="password" value="pass" />
        <!-- Send session variable value as a hidden form field value named 'confirmation' -->
        <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>" />
    </form>
</body>
</html>