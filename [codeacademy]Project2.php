<?php
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

