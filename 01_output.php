<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/* ------------ Comments ------------ */
// Single line comment

/*
 * Multi
 * line
 * comment
 * */

# Always use semicolon

/* ------- Outputting Content ------- */

echo 'Single quote'; echo '<br>';

echo "Double quote"; echo '<br>';

// echo - Output strings, numbers, html, etc
echo 123, ',Hello,', 19.9; echo '<br>';

// print - Similar to echo, but a bit slower
// print - Works like echo, but can only take in a single argument
print 123; echo '<br>';

// print_r() - Gives a bit more info. Can be used to print arrays
// print_r() - Print single values and arrays
//print_r([1,2,3,4,5]);

// var_dump() - Returns more info like data type and length
var_dump(true); echo '<br>';
var_dump(42); echo '<br>';
var_dump(42.24); echo '<br>';
var_dump('qwerty'); echo '<br>';

// var_export() - Similar to var_dump(), Outputs a string representation of variable
var_export('Example');

// Escaping characters with a backslash
echo "Is your name O\'reilly?";

// If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise, you do not.
?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My PHP Website</title>
</head>
<body>
    <!-- You can output PHP including variables, etc -->
    <h1><?php echo 'Azamat'; ?></h1>

    <?= '<br>'; ?>

    <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
    <h1>Hello <?= 'Azamat'; ?></h1>
</body>
</html>
