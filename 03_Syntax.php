<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Syntax</title>
</head>
<body>
    <?php
    # This is a comment, and
    # This is the second line of the comment
    // This is a comment too. Each style comments only
    print "An example with single line comments";
    ?>
    
    <?php
    # First Example
    print <<<END
    This uses the "here document" syntax to output
    multiple lines with $variable interpolation. Note
    that the here document terminator must appear on a
    line with just a semicolon no extra whitespace!
    END;
    # Second Example
    print "This spans
    multiple lines. The newlines will be
    output as well";
    ?>
    
    <?php
    /* This is a comment with multiline
    Author : Mohammad Mohtashim\
    Purpose: Multiline Comments Demo
    Subject: PHP
    */
    print "An example with multi line comments";
    ?>

    <?php
    $four = 2 + 2; // single spaces
    $four <tab>=<tab2<tab>+<tab>2 ; // spaces and tabs
    $four =
    2+
    2; // multiple lines
    ?>
    
    <?php
    $capital = 67;
    print("Variable capital is $capital<br>");
    print("Variable CaPiTaL is $CaPiTaL<br>");
    ?>

    <?php
    if (3 == 2 + 1)
    print("Good - I haven't totally lost my mind.<br>");
   if (3 == 2 + 1)
   {
    print("Good - I haven't totally");
    print("lost my mind.<br>");
   }
   ?>  
   <?php
   echo "Hello PHP!!!!!";
   //$ php test.ph
   ?>
</body>
</html>