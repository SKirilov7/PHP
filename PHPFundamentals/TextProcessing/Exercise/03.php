<?php
$pathToFile = readline();
$indexToStart = strrpos($pathToFile, "\\") + 1;
$file = substr($pathToFile, $indexToStart, strlen($pathToFile)- $indexToStart + 1);
$lastDotIndex = strrpos($file, '.')+1;
$fileName = substr($file, 0, $lastDotIndex - 1);
$extension = substr($file, $lastDotIndex);

echo "File name: $fileName".PHP_EOL;
echo "File extension: $extension";

