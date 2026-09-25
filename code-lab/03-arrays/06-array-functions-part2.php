<?php
function inspect(array $values): void {
    echo "<pre>";
    print_r($values);
    echo "</pre>";
}

$ids = [100, 'New ID', 33, 22, 15, 10];
$users = ['user1', 'user2', 'user3'];

// array_sum()
$output = "Sum of IDs:" . array_sum($ids);
echo $output;
echo "<br>------------------------------------------<br>";

// array_search()
$output = "user2 is at index: " . array_search('user2', $users);
echo $output;
echo "<br>-----------------------------------------<br>";

// in_array(): Check if the given value is present in the array
$output = "user4 exists: " . in_array('user4', $users);
echo $output;
echo "<br>";
var_dump(in_array('user4', $users));
echo "<br>";

array_push($users, 'user4', 'user5');

$output = "user4 exists: " . in_array('user4', $users);
echo $output;
echo "<br>";
var_dump(in_array('user4', $users));
echo "<br>-----------------------------------------<br>";

// explode(): Convert a string into an array
$tags = "tech,code,programming";
$tagsArray = explode(',', $tags);
inspect($tagsArray);
echo "-----------------------------------------<br>";

// implode(): Convert an array into a string
$output = "Users: " . implode(',', $users);
echo $output;
echo "<br>-----------------------------------------<br>";

// array_reverse()
$fruits = ["Orange", "Grape", "Apple", "Watermelon"];
$sortedFruits = array_reverse($fruits);
inspect($fruits);
inspect($sortedFruits);
echo "-----------------------------------------<br>";

// array_merge()
$newFruits = ["Banana", "Guava"];
$fruits = array_merge($fruits, $newFruits);
inspect($fruits);
