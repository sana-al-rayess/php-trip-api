<?php
if (isset($_GET['str'])) {
  $str = $_GET['str'];
  if (isPalindrome($str)) {
    echo "$str is a palindrome";
  } else {
    echo "$str is not a palindrome";
  }
} else {
  echo "Please provide a string parameter";
}

function isPalindrome($str) {
  $str = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str)); // remove non-alphanumeric characters and convert to lowercase
  return $str === strrev($str); // compare the string with its reverse
}
?>
<!-- http://localhost/php-trip-api/palindrom.php?str=anana -->