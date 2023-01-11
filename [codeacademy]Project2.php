<?php
/*
Mad Lib Functions

In this project, we’ll use PHP to write a function to fill in a Mad Libs story! Mad Libs are short stories with blank spaces, 
which get filled in by the user. The result is usually funny (or strange).
*/
// function generateStory($singular_noun, $verb, $color, $distance_unit)
function generateStory()
{
  $story = "
  \nThe The woods are lovely, dark, and deep.
  \nBut I have promises to keep,
  \nAnd miles to go before I sleep,
  \nAnd miles to go before I sleep,\n
  ";
  return $story;
}
//using str_replace
$replace = array("Books", "Read","Blue", "Faraway");
$search = array("woods", "sleep", "dark", "miles");
$result = str_replace($search, $replace, generateStory());
echo $result;

//using manual
// echo generateStory("Book", "Read", "Blue", "Close");
// echo generateStory("Pencil", "Write", "Yellow", "Close");
// echo generateStory("Shoes", "Walk", "Red", "Faraway");

