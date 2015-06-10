<?php
    $oldWord = "word";
    $newWord = "wordIsReplaced";
    $filePath = "wordReplace.txt";
    wordReplace($filePath, $oldWord, $newWord);

	function wordReplace($filePath, $oldWord, $newWord){
		$handler = fopen($filePath,"r");
		$fileStr = fread($handler, filesize($filePath));
        fclose($handler);
        $fileStrToWrite = str_ireplace($oldWord, $newWord, $fileStr);
		$handler = fopen($filePath,"w");
        fwrite($handler, $fileStrToWrite);
        fclose($handler);
	}

	fsdafsdafdsa
	aaaaaaaaa
//END
/*
Write a function that takes a filepath(with filename), a
string (word to find) and another string (word to use for replacement).
The function must find the first word (2nd arg) in the file and
replace all its occurrences with the other word (3rd arg).
*/