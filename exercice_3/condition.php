<?php
/*
// is_numeric works like a Boolean and NaN
echo is_numeric($_GET);
*/
/*
// when you change the age variable to a number less than 18, greater than 118 or anything that isn't a number, you will get the message: Invalid age.
*/
if ($_GET['age'] < 18 && $_GET['age'] > 118) {
  echo $_GET['name'] . ' ' . $_GET['surname'] . ' ' . $_GET['age'];
} else {
  echo 'Ce n\'est pas un âge valide.';
}
?>
