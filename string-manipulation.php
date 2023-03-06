<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $input = $_POST['input'];
  // define consonants as any letter that is not a vowel (A, E, I, O, U)
  $consonants = '/^[^aeiou]+/';
  if (preg_match($consonants, $input, $matches)) {
    $first_consonants = $matches[0];
    $input = substr($input, strlen($first_consonants)) . $first_consonants;
  }
  $result = $input . 'ay';
  echo $result;
} else {
  echo "Please use a POST request with the 'input' parameter";
}
?>
