<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */
$age = 17;

// if($age >= 18) {
//   echo 'You are old enough to vote';
// } else {
//   echo 'Sorry, you are not old enough to vote';
// }

$t = date('H');
// if($t < 12) {
//   echo 'Good morning';
// } elseif($t < 17) {
//   echo 'Good afternoon';
// } elseif($t < 20) {
//   echo 'Good evening';
// } else {
//   echo 'Good night';
// }

$posts = ['First Post'];

// if(!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'No Posts';
// }

// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';

// $firstPost = $posts[0] ?? null;
// echo $firstPost;

$favcolor = 'blue';

switch($favcolor) {
  case 'red':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default:
    echo 'Your favorite color is not red, green, or blue';
}