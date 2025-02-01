```php
function my_function($a, $b) {
  if ($a === 0 || $b === 0) {
    return 0; // Handle division by zero
  }
  return $a / $b;
}

$result = my_function(10, 0); 
var_dump($result); //Output: 0

$result = my_function(10, 0.0); 
var_dump($result); //Output: 0

$result = my_function(0, 10); 
var_dump($result); //Output: 0

$result = my_function(0.0, 10); 
var_dump($result); //Output: 0
```