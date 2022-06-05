<?php
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */
/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
for ($i = 0; $i <= 10; $i++) {
    echo 'Number: ' . $i . '<br>';
}
echo '<br>';


/* ------------ While Loop ------------ */
/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
$i = 1;

while ($i <= 5) {
    echo "Number: $i <br>";
    $i++;
}
echo '<br>';


/* ---------- Do While Loop --------- */
/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
*/
//do...while loop will always execute the block of code once, even if the condition is false.
$i = 0;
do {
    echo "Number: $i <br>";
    $i++;
} while ($i <= 5);
echo '<br>';

/* ---------- Foreach Loop ---------- */
/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
// Loop through an array
$posts = ['First Post', 'Second Post', 'Third Post'];
for ($i = 0; $i < count($posts); $i++) {
    echo $posts[$i] . '<br>';
}

foreach ($posts as $index => $post) {
    echo $index + 1 . ' - ' . $post . '<br>';
}
echo '<br>';


// Use the keys within the loop for an associative array
$person = [
    'firstName' => 'Azamat',
    'lastName' => 'Khabibullaev',
    'email' => 'frontend4every1@gmail.com'
];

// Get Keys
foreach ($person as $key => $value) {
    echo "$key - $value <br>";
}