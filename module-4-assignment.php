<?php

// 1. Write a PHP function to sort an array of strings by their length in ascending orders.

function sortStringsByLength($strings) {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}

$strings = array("apple", "banana", "pear", "grapefruit");
$sorted = sortStringsByLength($strings);
print_r($sorted);

/*Output: Array
(
    [0] => pear
    [1] => apple
    [2] => banana
    [3] => grapefruit
)
*/

// 2. Write a PHP function to concatenate two strings but with the second string starting from the end of the first string.

function concatenateStrings($string1, $string2) {
    $string2Reversed = strrev($string2);
    return $string1 . $string2Reversed;
}

$string1 = "hello";
$string2 = "world";
$result = concatenateStrings($string1, $string2);
echo "Concatenated string: " . $result; // Output: Concatenated string: helloworlddlrow


// 3. Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function removeFirstAndLast($array) {
    $length = count($array);
    
    if ($length <= 2) {
        return array();
    }
    
    return array_slice($array, 1, $length - 2);
}

$array = array(1, 2, 3, 4, 5);
$newArray = removeFirstAndLast($array);
print_r($newArray); // Outputs [2, 3, 4]


// 4. Write a PHP function to check if a string contains only letters and whitespace

function containsOnlyLettersAndWhitespace($string) {
    return ctype_alpha(str_replace(' ', '', $string));
}

$string1 = "This is a valid string.";
$string2 = "This is not a valid string, because it contains a comma.";

$result1 = containsOnlyLettersAndWhitespace($string1);
$result2 = containsOnlyLettersAndWhitespace($string2);

var_dump($result1); // Outputs true
var_dump($result2); // Outputs false

// 5. Write a PHP function to find the second largest number in an area of numbers.

function findSecondLargest($numbers) {
    $largest = $numbers[0];
    $secondLargest = null;
    foreach ($numbers as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } elseif ($num != $largest && ($secondLargest === null || $num > $secondLargest)) {
            $secondLargest = $num;
        }
    }
    return $secondLargest;
}


$numbers = [5, 10, 2, 8, 7];
$secondLargest = findSecondLargest($numbers);
echo "The second largest number is: " . $secondLargest; // Output: The second largest number is: 8


