<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Constants</title>
</head>
<body>
    <?php
    define("MINSIZE", 50);
    echo MINSIZE;
    echo constant("MINSIZE");

    // Valid constant names
    define("ONE", "first thing");
    define("TWO2", "second thing");
    define("THREE_3", "third thing")
    // Invalid constant names
    define("2TWO", "second thing");
    define("__THREE__", "third value");
    ?>	
</body>
</html>