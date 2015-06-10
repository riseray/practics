<?php
    $str = "Write a function countWords() that takes any string of characters and returns the number of times each word occurs. You should ignore the distinction between capital and lowercase letters, and do not have to worry about dealing with characters that are not letters. Write additional code to call the function and print out the result";
    countWords($str);
    print_r(array_count_values(countWords($str)));

$expode
    function countWords($str){
        $str = strtolower($str);
        $strArr = preg_split("/[\s,.)(]+/", $str);
        return $strArr;
    }

echo "end";
//End
//Write a function countWords($str) that takes any string of characters and returns the number of times each word occurs. You should ignore the distinction between capital and lowercase letters, and do not have to worry about dealing with characters that are not letters. Write additional code to call the function and print out the result.