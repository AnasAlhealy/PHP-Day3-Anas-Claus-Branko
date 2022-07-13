<?php

/*
Exercise 1

Create a for loop which will print your name 50 times on the screen. Do the same with while and do while loop. 
*/

echo "Classwork Ex1: <br> <br>";

for ($i=1; $i < 51; $i++) {
  echo "$i. Hello I am Claus. <br>";
};

echo "<br><br><br>";

/*
Exercise 2
Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.
*/

echo "Classwork Ex2: <br> <br>";

$array = ["Schwarz", "Weiß", "Grau", "Blau", "Grün", "Gelb", "Rot", "Rosa", "Lila", "Braun"];

foreach ($array as $each) {
  echo "Farbe: $each <br>";
};

echo "<br><br><br>";

/*
Exercise 3
Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP
*/

echo "Classwork Ex3: <br> <br>";

$randArray = [rand(),rand(),rand(),rand(),rand(),rand(),rand(),rand(),rand(),rand(),];

// var_dump($randArray);

function highValue($array2) {
  $result = max($array2);
  echo "The highest number in the array is $result.";
};

highValue($randArray);

echo "<br><br><br>";

/*
Create a PHP program that iterates the integers from 1 to 100. For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that are multiples of both three and five print "Full-Stack".
*/

echo "Classwork Ex4: <br> <br>";

for ($i=1; $i <= 100; $i++) {
  if ($i%3 == 0 && $i%5 !== 0) {
    echo "$i. Back-End <br>";
  } elseif ($i%5 == 0 && $i%3 !== 0) {
    echo "$i. Front-End <br>";
  } elseif ($i%3 == 0 && $i%5 == 0){
    echo "$i. Full-Stack <br>";
  } else {
  echo "$i. $i <br>";
  }
} 

echo "<br><br><br>";