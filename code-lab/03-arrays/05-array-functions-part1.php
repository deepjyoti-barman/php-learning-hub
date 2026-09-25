<?php
function inspect(array $values): void {
    echo "<pre>";
    print_r($values);
    echo "</pre>";
}

$ids = [10, 22, 15, 45, 67];
$users = ['user1', 'user2', 'user3'];

// count()
$output = count($ids);
echo "count(\$ids) = {$output}";
echo "<br>------------------------------------------<br>";

// sort()
sort($ids);
echo "sort(\$ids):";
inspect($ids);
echo "------------------------------------------<br>";

// rsort(): Reverse sort
rsort($ids);
echo "rsort(\$ids):";
inspect($ids);
echo "------------------------------------------<br>";

// array_push()
array_push($ids, 100, 101);
echo "array_push(\$ids, 100, 101):";
inspect($ids);
echo "------------------------------------------<br>";

// array_pop(): remove the last element from the array
$last = array_pop($ids);
echo "array_pop(\$ids):";
inspect($ids);
echo "Element removed = $last";
echo "<br>------------------------------------------<br>";


// array_shift(): Remove the first element from the array
$first = array_shift($ids);
echo "array_shift(\$ids):";
inspect($ids);
echo "Element removed = $first";
echo "<br>------------------------------------------<br>";

// array_unshift: Add an element to the beginning of the array
array_unshift($ids, 300);
echo "array_unshift(\$ids, 300):";
inspect($ids);
echo "------------------------------------------<br>";

// array_slice(): Return part of the array as a new array
$ids2 = array_slice($ids, 2, 3);
echo "array_slice(\$ids, 2, 3):";
inspect($ids2);
echo "------------------------------------------<br>";

// array_splice(): Return a portion of the array and replace with something else
array_splice($ids, 1, 1, 'New ID');
echo "array_splice(\$ids, 1, 1, 'New ID'):";
inspect($ids);
echo "------------------------------------------<br>";
