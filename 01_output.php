<?php
// Single line comment

/*
 * Multi
 * line
 * comment
 * */

# Always use semicolon

echo 'Single quote'; echo '<br>';

echo "Double quote"; echo '<br>';

// echo - Output strings, numbers, html, etc
echo 123, ',Hello,', 19.9; echo '<br>';

// print - Works like echo, but can only take in a single argument
print 123; echo '<br>';

// print_r() - Print single values and arrays
//print_r([1,2,3,4,5]);

// var_dump() - Returns more info like data type and length
var_dump(true); echo '<br>';
var_dump(42); echo '<br>';
var_dump(42.24); echo '<br>';
var_dump('qwerty'); echo '<br>';

// var_export() - Similar to var_dump(), Outputs a string representation of variable
var_export('Example');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo 'Post one!'; ?>
        <?= '<br>'; ?>
        <?= 'Post two!'; ?>
    </h1>
</body>
</html>
