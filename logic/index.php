<?php 


$mainArray = [2,1,6,9,9,4,3];

asort($mainArray);

$sortedArray = [];

foreach ($mainArray as $item) {
	array_push($sortedArray, $item);
}

$dataLength = count($mainArray);

echo $sortedArray[($dataLength -1) -2] . PHP_EOL;