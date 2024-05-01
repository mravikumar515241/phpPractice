<?php
// Function to square a number
function square($num) {
    return $num * $num;
}

$numbers = [1, 2, 3, 4, 5];

// Apply the square function to each element in the array
$squared_numbers = array_map("square", $numbers);

print_r($squared_numbers);  // Output: [1, 4, 9, 16, 25]
echo "<br>";
?>
<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
echo "<br>";
?>

<?php
//anonymous function 
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
?>


