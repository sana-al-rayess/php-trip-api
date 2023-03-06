<?php

function selectionSort($arr) {
    $n = count($arr); 
    for ($i = 0; $i < $n - 1; $i++) {
        $min_idx = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min_idx]) {
                $min_idx = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_idx];
        $arr[$min_idx] = $temp;
    }
    return $arr;
}

if (isset($_GET['numbers'])) { //check if the numbers parameter is set in the URL.
    $numbers_str = $_GET['numbers']; // gets the value of the parameter URL and assigns it to $numbers_str.
    $numbers = explode(',', $numbers_str);// tthis function splits the string of numbers into an array using the comma & assigns it to the variable $numbers
   
    $sorted_numbers = selectionSort($numbers);

    echo json_encode($sorted_numbers);
}
?>

<!-- http://localhost/php-trip-api/selectionsort.php?numbers=1,5,2,99 -->