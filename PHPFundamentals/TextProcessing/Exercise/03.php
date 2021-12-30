<?php
$pathToFile = readline();
$indexToStart = strrpos($pathToFile, "\\") + 1;

$pathFileNameAndExtension = explode('.', substr($pathToFile, $indexToStart, strlen($pathToFile)- $indexToStart + 1));
$fileName = $pathFileNameAndExtension[0];
$extension = $pathFileNameAndExtension[1];

echo "File name: $fileName".PHP_EOL;
echo "File extension: $extension";

