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
        $filename = "storedxss.txt";
        if (file_exists($filename)) {
            $contents = file_get_contents($filename);
            echo $contents;
        } else {
            echo "File not found: " . $filename;
        }
    ?>
</body>
</html>