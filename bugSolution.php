```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) { //check if number is numeric
      $sum += $number;
    } else {
      echo "Warning: Non-numeric value encountered: " . $number . '\n';
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Output: Warning: Non-numeric value encountered: 4a
                        //Sum: 6
```