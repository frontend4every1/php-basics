<?php
/* --- $_GET & $_POST Super globals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST super globals.
*/

//echo $_GET['name'];
//echo $_GET['age'];

if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo '<br>';
    echo $_POST['age'];
}
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
    <br>
    <!-- Pass data through a link -->
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Azamat&age=30">Click</a>
    <br><br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="age">Age: </label>
            <input type="text" name="age" id="age">
        </div>
        <button type="submit" name="submit" value="Submit">Submit</button>
        <button type="reset" name="reset">Reset</button>
    </form>
</body>
</html>
