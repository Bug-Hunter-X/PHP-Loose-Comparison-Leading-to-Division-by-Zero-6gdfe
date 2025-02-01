```php
function my_function($a, $b) {
  if ($a === 0 || $b === 0) {
    return 0; // Handle division by zero
  }
  return $a / $b;
}

$result = my_function(10, 0); //This will still cause a warning because of the loose comparison
var_dump($result); //Output: Warning: Division by zero in ...

$result = my_function(10, 0.0); //This will still cause a warning because of the loose comparison
var_dump($result); //Output: Warning: Division by zero in ...

$result = my_function(0, 10); //This will still cause a warning because of the loose comparison
var_dump($result); //Output: Warning: Division by zero in ...

$result = my_function(0.0, 10); //This will still cause a warning because of the loose comparison
var_dump($result); //Output: Warning: Division by zero in ...
```