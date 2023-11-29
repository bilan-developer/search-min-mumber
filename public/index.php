<?php

//use Email;
require __DIR__.'/../vendor/autoload.php';

$array = DataGeneration::generateRandomArray();
$number = DataGeneration::generateRandomNumber();
$smallestNumber = new SearchMinNumber($array);

echo "First case: "  .$smallestNumber->firstCase(10);
echo "<br>";
echo "Second case: " . $smallestNumber->secondCase(10);
echo "<br>";
echo "Third case: " . $smallestNumber->thirdCase(10);
echo "<br>";
echo "Fourth case: " . $smallestNumber->fourthCase(10);
