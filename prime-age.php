<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') { //checks if the HTTP request method is POST
  $year = $_POST['year']; //extracts the 'year' value from the HTTP POST request parameter
  $age = date('Y') - $year; //calculates the age of the user by subtracting the birth year provided in the 'year' parameter from the current year
  if (isPrime($age)) {
    echo "Your age is $age and it is prime";
  } else {
    echo "Your age is $age and it is not prime";
  }
  if ($age % 2 == 0) {
    echo " and even";
  } else {
    echo " and odd";
  }
} else {
  echo "Please use a POST request with the 'year' parameter";
}

function isPrime($n) {
  if ($n <= 1) {
    return false;
  }
  for ($i = 2; $i <= sqrt($n); $i++) {
    if ($n % $i === 0) {
      return false;
    }
  }
  return true;
}
?>
